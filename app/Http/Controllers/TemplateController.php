<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\File;

use App\Models\Template;
use App\Models\DocumentsCoverletter;
// use DocumentCov;

class TemplateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (Auth::check() && Auth::user()->level == 'admin') {
            $templates = Template::latest('id')->get();
            return view('dashboard.admin.add_edit_template', compact('templates'));
        }
        else {
            return redirect(route('home'));
        }
        // $templates = Template::latest('id')->get();
        // return view('admin.index', compact('templates'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = "Add new template";
        $page = "templates";
        return view('dashboard.admin.add_edit_template', compact('title', 'page'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'type' => 'required|max:3',
                'name' => 'required',
                'image' => 'image',
                'html' => '',
            ]
        );

        $insert = new Template();
        $insert->type = $request->type;
        $insert->name = $request->name;

        if($request->hasFile('image')) {
            $file = $request->file('image');
            $file_name = time().$file->getClientOriginalName();

            $file->move(public_path('/templates/uploads'), $file_name);
            $insert->image = $file_name;
        }
        $insert->html = $request->html;

        $result = $insert->save();
        Session::flash('success', 'Added template successfully');
        return redirect()->route('dashboard.admin.templates');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $title = "Update Template";
        $page = "templates";
        $edit = Template::findOrFail($id);
        return view('dashboard.admin.add_edit_template', compact('edit', 'page', 'title'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate(
            [
                'type' => 'required|max:3',
                'name' => 'required',
                'image' => 'image|max:2048',
                'html' => '',
            ]
        );
        $update = Template::findOrFail($id);
        $update->type = $request->type;
        $update->name = $request->name;

        if($request->hasFile('image')) {
            $file = $request->file('image');
            $file_name = time().$file->getClientOriginalName();

            $file->move(public_path('/templates/uploads'), $file_name);
            //delete old image
            if(!is_null($update->image)){
                if(File::exists(public_path('/templates/uploads/' . $update->image))){
                    unlink(public_path('/templates/uploads/' . $update->image));
                }
            }
            $update->image = $file_name;
        }
        else {
            $update->image = $update->image;
        }
        $update->html = $request->html;

        $result = $update->save();
        Session::flash('success', 'Updated template successfully');
        return redirect()->route('dashboard.admin.templates');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(Request $request)
    {
        $template = Template::findOrFail($request->t_id);
        $template->delete();

        if(!is_null($template->image)){
            if(File::exists(public_path('/templates/uploads/' . $template->image))){
                unlink(public_path('/templates/uploads/' . $template->image));
            }
        }

        Session::flash('success', 'Deleted template successfully');
        return redirect()->route('dashboard.admin.templates');

    }


    ////// cover letter
    // cov all templates
    public function showAllCovTemplates(){
        $templates = Template::where('type', 'COV')->get();
        return view('coverletter.cov_templates', compact('templates'));
    }

    // cov editor
    public function CovTemplateEdit(string $id){
        $template = Template::findOrFail($id);
        $alltemplates = Template::where('type', 'COV')->get();
        return view('coverletter.editor.cov_editor', compact('template', 'alltemplates'));
    }

    ////// resume
    // res all templates
    public function showAllResTemplates(){
        $templates = Template::where('type', 'RES')->get();
        return view('resume.res_templates', compact('templates'));
    }

    // res editor
    public function ResTemplateEdit(string $id){
        $template = Template::findOrFail($id);
        $alltemplates = Template::where('type', 'RES')->get();
        return view('resume.editor.res_editor', compact('template', 'alltemplates'));
    }

    // save cover letter document
    public function saveCov(Request $request)
    {
        $request->validate(
            [
                'id_user' => 'required',
                'img_template' => 'required',
                'contact_firstname' => '',
                'contact_lastname' => '',
                'job_title' => '',
                'contact_email' => '',
                'contact_phone' => '',
                'contact_address' => '',
                'greeting' => '',
                'recipient_title' => '',
                'recipient_firstname' => '',
                'recipient_lastname' => '',
                'company_name' => '',
                'doc_body' => ''
            ]
        );

        $template = Template::where('image', $request->img_template)->first();

        $insert = new DocumentsCoverletter();
        $insert->id_user = $request->id_user;
        $insert->id_template = $template->id;
        $insert->image_template = $request->img_template;
        $insert->contact_firstname = $request->contact_firstname;
        $insert->contact_lastname = $request->contact_lastname;
        $insert->job_title = $request->job_title;
        $insert->contact_email = $request->contact_email;
        $insert->contact_phone = $request->contact_phone;
        $insert->contact_address = $request->contact_address;
        $insert->greeting = $request->greeting;
        $insert->recipient_title = $request->recipient_title;
        $insert->recipient_firstname = $request->recipient_firstname;
        $insert->recipient_lastname = $request->recipient_lastname;
        $insert->company_name = $request->company_name;
        $insert->doc_body = $request->doc_body;

        $result = $insert->save();
        Session::flash('success', 'Save document successfully');
        return redirect()->route('home');
    }

    // update cover letter document
    public function updateCov(Request $request, String $id)
    {
        $request->validate(
            [
                'id_user' => 'required',
                'img_template' => 'required',
                'contact_firstname' => '',
                'contact_lastname' => '',
                'job_title' => '',
                'contact_email' => '',
                'contact_phone' => '',
                'contact_address' => '',
                'greeting' => '',
                'recipient_title' => '',
                'recipient_firstname' => '',
                'recipient_lastname' => '',
                'company_name' => '',
                'doc_body' => ''
            ]
        );

        $template = Template::where('image', $request->img_template)->first();

        $update = DocumentsCoverletter::findOrFail($id);
        $update->id_user = $request->id_user;
        $update->id_template = $template->id;
        $update->image_template = $request->img_template;
        $update->contact_firstname = $request->contact_firstname;
        $update->contact_lastname = $request->contact_lastname;
        $update->job_title = $request->job_title;
        $update->contact_email = $request->contact_email;
        $update->contact_phone = $request->contact_phone;
        $update->contact_address = $request->contact_address;
        $update->greeting = $request->greeting;
        $update->recipient_title = $request->recipient_title;
        $update->recipient_firstname = $request->recipient_firstname;
        $update->recipient_lastname = $request->recipient_lastname;
        $update->company_name = $request->company_name;
        $update->doc_body = $request->doc_body;

        $result = $update->save();
        Session::flash('success', 'Update document successfully');
        
        return redirect()->route('dashboard.user.documents');
    }

}
