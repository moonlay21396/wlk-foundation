<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

use App\Blog;
use App\Service;
use App\Contact;
use App\Team;
use App\Office;
use App\Client;
use App\Donate;
use App\About;
use App\CustomClass\AboutData;
use App\CustomClass\BlogData;
use App\CustomClass\ServiceData;
use App\CustomClass\TeamData;
use App\CustomClass\ContactData;
use App\CustomClass\ClientData;
use App\CustomClass\DonateData;
use Session;


class BlogController extends Controller
{
    // <=========For Blog==========>
    function show_blog(){
        return view('site_admin.blog')->with([
            'url' => 'blog'
        ]);
    }
    function view_blog(){
        $blogs = Blog::orderBy('id','desc')->get();
        $blog_datas=BlogData::getAllData($blogs);
        return json_encode($blog_datas);
    }

    function detail_blog($id){
        $blog_obj = new BlogData($id);
        $blog_detail = $blog_obj->getSingleBlogData();
        return view('site_admin.blog_detail',compact('blog_detail'))->with([
            'url' => 'blog'
        ]);
    }

    function create_or_edit_admin_blog(Request $request){
        $title=$request->get('title');
        $detail=$request->get('detail');

        $file = $request->file('photo');
        $fileName =time()."_".$file->getClientOriginalName();
        $file->move(public_path().'/upload/blog',$fileName);
        Blog::create([
            'title'=> $title,
            'detail' => $detail,
            'photo' => $fileName
        ]);   
        return redirect('/admin/blog')->with('alert', 'Create Blog Successfully');
    }

    public function edit_blog($id)
    {       
       $obj=new BlogData($id);
       return json_encode($obj->getSingleBlogData());
    }

    public function update_blog(Request $request)
    {
       $update_blog=Blog::find($request->get('id'));
       $update_blog->title=$request->get('title');
       $update_blog->detail=$request->get('detail');

       if($request->hasFile('photo')){
            if(file_exists(public_path().'/upload/blog/'.$update_blog->photo)){
                unlink(public_path().'/upload/blog/'.$update_blog->photo);
            }
            $photo = $request->file('photo');
            $photo_name = uniqid().'_'.$photo->getClientOriginalName();
            $photo->move(public_path('upload/blog/'),$photo_name);

            $update_blog->photo=$photo_name;
            $update_blog->update();
       }else{
            $update_blog->update();
       }
       return json_encode(true);
    
    }

    function delete_blog($id){
      $blog = Blog::find($id);
      $image_path=public_path().'/upload/blog/'.$blog->photo;
      if(file_exists($image_path)){
          unlink($image_path);
      }
      $blog->delete();
    }   

    // <=============For Contact=========>
    function contact(){  
        return view('site_admin.contact')->with([
            'url'=>'contact',
        ]);
    }
    function view_contact(){
        $contacts=Contact::orderBy('id', 'desc')->get();
        $arr=[];
        foreach ($contacts as $data){
            $contact_data=new ContactData($data->id);
            array_push($arr,$contact_data->getContactData());
        }
         return json_encode($arr);
    }
    function delete_contact($id){
       Contact::find($id)->delete();
        return redirect('/admin/contact');
    }

    // <=============For Office==============>
    function office(){
        $get_office = Office::find(1);
       return view('site_admin.office',compact('get_office'))->with([
            'url' => 'office'
       ]); 
    }
    function update_office(Request $request)
    {
        Session::flash('success', 'Update successful');
        if ($request->hasFile('photo')){
            $file = $request->file('photo');
            $fileName = $file->getClientOriginalName();
            $file->move(public_path() . '/upload/office', $fileName);

            Office::find($request->get('id'))->update([
            'photo'=>$fileName,
            'about' => $request->get('about'),
            'phone' => $request->get('phone'),
            'email' => $request->get('email'),
            'address' => $request->get('address'),
            'vision' => $request->get('vision'),
            'mission' => $request->get('mission') 
         ]);
        }else{
            Office::find($request->get('id'))->update([
            'about' => $request->get('about'),
            'phone' => $request->get('phone'),
            'email' => $request->get('email'),
            'address' => $request->get('address'),
            'vision' => $request->get('vision'),
            'mission' => $request->get('mission') 
            ]);
        }
        return redirect('/admin/office');
    }

    // <============For Client=========>
    function client(){
        return view('site_admin.client')->with([
            'url' => 'client',
        ]);
    }
    function view_client(){
        $client = Client::orderBy('id','desc')->get();
        $client_data = ClientData::getAllData($client
        );
        return json_encode($client_data);
    }
    function create_client(Request $request){
        $file = $request->file('photo');
        $filename = uniqid().'_'.$file->getClientOriginalName();
        $file->move(public_path().'/upload/client/',$filename);
        Client::create([
            'photo' => $filename,
            'link' => $request->get('link')
        ]);
        return redirect('admin/client');
    }
    function edit_client($id){
        $obj = new ClientData($id);
        return json_encode($obj->getSingleClientData());
    }
    function update_client(Request $request){
       $update_client=Client::find($request->get('id'));
       $update_client->link=$request->get('link');

       if($request->hasFile('photo')){
            if(file_exists(public_path().'/upload/client/'.$update_client->photo)){
                unlink(public_path().'/upload/client/'.$update_client->photo);
            }
            $photo = $request->file('photo');
            $photo_name = uniqid().'_'.$photo->getClientOriginalName();
            $photo->move(public_path('upload/client/'),$photo_name);

            $update_client->photo=$photo_name;
       }
       $update_client->update();

       return json_encode(true);
    }

    function delete_client($id){
        Client::find($id)->delete();
        return back();
    }

    // <===========For Donate List===========>
    function donate_list(){
        return view('site_admin.donate')->with([
            'url' => 'donate'
        ]);
    }
    function view_donate(){
        $getDonate = Donate::orderBy('id','desc')->get();
        $donate_data = DonateData::getAllData($getDonate);
        return json_encode($donate_data);
    }   
    function delete_donate($id){
        Donate::find($id)->delete();
        return back();
    }

    // <=============For Client============>
    function admin_about(){
        return view('site_admin.about')->with([
            'url' => 'about'
        ]);
    }
    function insert_about(Request $request){
        $file = $request->file('photo');
        $fileName = uniqid().'_'.$file->getClientOriginalName();
        $file->move(public_path().'/upload/about',$fileName);
        About::create([
            'title' => $request->get('title'),
            'detail' => $request->get('detail'),
            'photo' => $fileName
        ]);
        return redirect('/admin/about');
    }
    function view_about(){
       $about = About::orderBy('id','desc')->get();
       $about_datas=AboutData::getAllData($about);
       return json_encode($about_datas); 
    }
    function edit_about($id){
        $about = new AboutData($id);
        return json_encode($about->getSingleAboutData());
    }
    public function update_about(Request $request)
    {
       $update_about=About::find($request->get('id'));
       $update_about->title=$request->get('title');
       $update_about->detail=$request->get('detail');

       if($request->hasFile('photo')){
            if(file_exists(public_path().'/upload/about/'.$update_about->photo)){
                unlink(public_path().'/upload/about/'.$update_about->photo);
            }
            $photo = $request->file('photo');
            $photo_name = uniqid().'_'.$photo->getClientOriginalName();
            $photo->move(public_path('upload/about/'),$photo_name);

            $update_about->photo=$photo_name;
       }
       $update_about->update();

       return json_encode(true);
    
    }
    function delete_about($id){
      $delete_about = About::find($id);
      $image_path=public_path().'/upload/about/'.$delete_about->photo;
      if(file_exists($image_path)){
          unlink($image_path);
      }
      $delete_about->delete();
    }

    //-----------------------------------api----------------
    function apiCreateBlog(Request $request){
        return response()->json($request->all());
    }
}

