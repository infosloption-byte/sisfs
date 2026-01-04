<?php

namespace App\Modules\InquiryManage\Logics;

use DB;
use Mail;
use Excel;
use Sentinel;
use Response;
use Exception;
use Carbon\Carbon;
use App\Classes\Functions;
use Illuminate\Support\Facades\URL;

use App\Modules\InquiryManage\Models\Inquiry;
use App\Modules\InquiryManage\Models\InquiryAttachment;
use System\Employee\Models\Employee;

class InquiryLogic 
{
        
    public function __construct(Functions $common)
    {
        $this->common = $common;
    }

    public function createInquiry($request)
    {
    	$response = [];

    	try{

	    	DB::transaction(function () use($request,&$response)
			{
				$inquiry = Inquiry::create([
		    		'first_name'   	=> $request->first_name,
		    		'last_name'    	=> $request->last_name,
	                'email'   		=> $request->email,
	                'contact_no'   	=> $request->contact_no,
		    		'title'   		=> $request->subject,
		    		'notes'        	=> $request->message
		    	]);

		    	if($inquiry)
		    	{
		    		$inquiry->inq_no = "INQ/".str_pad($inquiry->id,6,0,STR_PAD_LEFT)."";
		    		$inquiry->save();

		    		Mail::send('emails.new_inquiry', ['data' => $inquiry], function ($m)use($inquiry)
		            {
		                $m->from('admin@sisfs.com.au', 'SISFS Inquiry');
		                $m->cc(['csriyarathne@gmail.com']);
		                $m->to($inquiry->email)->subject("SISFS Inquiry - ".$inquiry->inq_no);
		            });

		            Mail::send('emails.customer_inquiry', ['data' => $inquiry], function ($m)use($inquiry)
		            {
		                $m->from($inquiry->email, 'Customer Inquiry');
		                $m->to(['inquiry@sisfs.com.au','gayan@sisfs.com.au','csriyarathne@gmail.com'])->subject("Customer Inquiry - ".$inquiry->inq_no);
		            });

		    		$response['status_code'] = 200;
		    		$response['message'] = 'Success';
		    		$response['debug'] = 'Inquiry created';
		    	}else{
		    		$response['status_code'] = 500;
		    		$response['message'] = 'Faild';
		    		$response['debug'] = 'Inquiry faild';
		    	}
				
			});

			return $response;

		} catch (Exception $e) {
            $response['status_code'] = 500;
            $response['message'] = "Internal Server Error";
            $response['debug'] = $e->getMessage();

            return response()->json($response);
        }
    }

    public function createClientInquiry($request)
    {
    	$response = [];

    	try{

	    	DB::transaction(function () use($request,&$response)
			{
				$client = Employee::find(\Auth::getUser()->employee_id);

				if($client)
				{
					$inquiry = Inquiry::create([
			    		'first_name'   	=> $client->first_name,
			    		'last_name'    	=> $client->last_name,
		                'email'   		=> $client->email,
		                'contact_no'   	=> $client->phone,
			    		'title'   		=> $request->title,
			    		'notes'        	=> $request->remark,
			    		'client_id'		=> $client->id,
			    		'job_id'		=> $request->job
			    	]);

			    	if($inquiry)
			    	{
			    		$inquiry->inq_no = "INQ/".str_pad($inquiry->id,6,0,STR_PAD_LEFT)."";
			    		$inquiry->save();

			    		$attached_imgs = [];

			    		if(isset($request->inquiry_images))
	                    {
	                    	foreach ($request->inquiry_images as $value)
	                    	{
	                    		$filePath = 'uploads/inquiry';
		                        
		                        $this->common->makeDirNotExist($filePath, 0777, true);
		                        $fileName = '';

		                        $extn = $value->getClientOriginalExtension(); //get extension

		                        $_img = InquiryAttachment::create([
		                        	'inquiry_id' => $inquiry->id
		                        ]);

		                        $fileName = 'Inquiry_image_'.$_img->id.'.'.$extn; //set file name

		                        $destinationPath = storage_path($filePath); // destination
		                        $value->move($destinationPath, $fileName);//move to file

		                        $_img->file_name = $fileName;
		                        $_img->image_url = "uploads/inquiry/".$fileName;
			                    $_img->save();

			                    $attached_imgs[] = URL::to('storage').'/'.$_img->image_url;
	                    	}
	                    }

			    		Mail::send('emails.new_inquiry', ['data' => $inquiry,'attachments'=>$attached_imgs], function ($m)use($inquiry)
			            {
			                $m->from('admin@sisfs.com.au', 'SISFS Inquiry');
			                $m->cc(['csriyarathne@gmail.com']);
			                $m->to($inquiry->email)->subject("SISFS Inquiry - ".$inquiry->inq_no);
			            });

			            Mail::send('emails.customer_inquiry', ['data' => $inquiry,'attachments'=>$attached_imgs], function ($m)use($inquiry)
			            {
			                $m->from($inquiry->email, 'Client Inquiry');
			                $m->to(['inquiry@sisfs.com.au','gayan@sisfs.com.au','csriyarathne@gmail.com'])->subject("Client Inquiry - ".$inquiry->inq_no);
			            });

			    		$response['status_code'] = 200;
			    		$response['message'] = 'Success';
			    		$response['debug'] = 'Inquiry created';
			    	}else{
			    		$response['status_code'] = 500;
			    		$response['message'] = 'Faild';
			    		$response['debug'] = 'Inquiry faild';
			    	}
				}else{
					$response['status_code'] = 500;
		    		$response['message'] = 'Faild';
		    		$response['debug'] = 'Client not found';
				}
				
			});

			return $response;

		} catch (Exception $e) {
            $response['status_code'] = 500;
            $response['message'] = "Internal Server Error";
            $response['debug'] = $e->getMessage().'---'.$e->getLine();

            return response()->json($response);
        }
    }

    public function approveInquiry($request)
    {
    	$response = [];

    	try{

	    	DB::transaction(function () use($request,&$response)
			{
				$inquiry = Inquiry::find($request->id);

		    	if($inquiry)
		    	{
		    		$inquiry->status = INQUIRY_APPROVED;
		    		$inquiry->approved_by = \Auth::user()->id;
		    		$inquiry->approved_at = date('Y-m-d H:i:s');
		    		$inquiry->save();

		    		$response['status_code'] = 200;
		    		$response['message'] = 'Success';
		    		$response['debug'] = 'Inquiry approved';
		    	}else{
		    		$response['status_code'] = 500;
		    		$response['message'] = 'Faild';
		    		$response['debug'] = 'Inquiry faild';
		    	}
				
			});

			return $response;

		} catch (Exception $e) {
            $response['status_code'] = 500;
            $response['message'] = "Internal Server Error";
            $response['debug'] = $e->getMessage();

            return response()->json($response);
        }
    }

    public function rejectInquiry($request)
    {
    	$response = [];

    	try{

	    	DB::transaction(function () use($request,&$response)
			{
				$inquiry = Inquiry::find($request->id);

		    	if($inquiry)
		    	{
		    		$inquiry->status = INQUIRY_REJECTED;

		    		$inquiry->rejected_reason = $request->reason;
		    		$inquiry->rejected_by = \Auth::user()->id;
		    		$inquiry->rejected_at = date('Y-m-d H:i:s');
		    		$inquiry->save();

		    		$response['status_code'] = 200;
		    		$response['message'] = 'Success';
		    		$response['debug'] = 'Inquiry rejected';
		    	}else{
		    		$response['status_code'] = 500;
		    		$response['message'] = 'Faild';
		    		$response['debug'] = 'Inquiry faild';
		    	}
				
			});

			return $response;

		} catch (Exception $e) {
            $response['status_code'] = 500;
            $response['message'] = "Internal Server Error";
            $response['debug'] = $e->getMessage();

            return response()->json($response);
        }
    }
   
}
