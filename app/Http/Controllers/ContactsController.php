<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Contacts;
use App\Models\Users;

class ContactsController extends Controller
{
    public function index()
    {
         return view('frontend.pages.contact.contact');
    }
    public function store(Request $request)
    {
    $this->validate($request, 
        [
            //Kiểm tra giá trị rỗng
            'contact_name' => 'required',
            'contact_email' => 'required',
            'contact_title' => 'required',
            'contact_phone' => 'required',
            'contact_message' => 'required'
        ],          
        [
            //Tùy chỉnh hiển thị thông báo
            'contact_name.required' => 'Bạn chưa nhập tên !',
            'contact_email.required' => 'Bạn chưa nhập email!',
            'contact_title.required' => 'Bạn chưa nhập tiêu đề!',
            'contact_phone.required' => 'Bạn chưa nhập số điện thoại!',
            'contact_message.required' => 'Bạn chưa nhập tin nhắn!'
        ]
    );
            date_default_timezone_set("Asia/Ho_Chi_Minh");
            $contact = new Contacts();
            $contact->contact_name = $request->contact_name;
            $contact->user_id = $request->user_id;
            $contact->contact_email = $request->contact_email;
            $contact->contact_title = $request->contact_title;
            $contact->contact_phone = $request->contact_phone;
            $contact->contact_message = $request->contact_message;
            $contact->save();
    //Thực hiện chuyển trang
    return redirect('frontend/contacts')->with('success', 'Gửi liên hệ thành công, chúng tối sẽ trả lời bạn qua email hoặc số điện thoại bạn đã cung cấp sớm nhất có thể');
    }

    public function getContacts()
    {
        $contacts = DB::table('contacts as p')
                    ->leftJoin('users as us', 'p.user_id', '=', 'us.id')
                    ->select('p.id','p.contact_name','us.fullname','p.user_id','p.contact_email','p.contact_title','p.contact_phone','p.contact_message')->orderby('id','desc')->get();
        return view('admin.contacts.contacts', compact('contacts'));
    }

    public function edit($id)
    {
        $contactsEditing = Contacts::find($id);
        return view('admin.contacts.edit', compact('contactsEditing'));
    }

    public function update(Request $request)
    {
        $this->validate($request, 
        [
            //Kiểm tra giá trị rỗng
            'contact_name' => 'required',
            'contact_email' => 'required',
            'contact_title' => 'required',
            'contact_phone' => 'required|max:10',
            'contact_message' => 'required'
        ],          
        [
            //Tùy chỉnh hiển thị thông báo
            'contact_name.required' => 'Bạn chưa nhập tên !',
            'contact_email.required' => 'Bạn chưa nhập email!',
            'contact_title.required' => 'Bạn chưa nhập tiêu đề!',
            'contact_phone.required' => 'Bạn chưa nhập số điện thoại!',
            'contact_phone.max:10' => 'Số điện thoại không được quá 10 ký tự!',
            'contact_message.required' => 'Bạn chưa nhập tin nhắn!'
        ]
    );
    
        //Thực hiện câu lệnh update với các giá trị $request trả về
        $updateData = DB::table('contacts')->where('id', $request->id)->update([
            'contact_name' => $request->contact_name,
            'contact_email' => $request->contact_email,
            'contact_title' => $request->contact_title,
            'contact_phone' => $request->contact_phone,
            'contact_message' => $request->contact_message,
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        return redirect('contacts/'.$request->id.'/edit')->with('success', 'Cập nhật liên hệ thành công');     
    }
    public function destroy($id)
    {
        $deleteContacts = Contacts::find($id)->delete();
        if($deleteContacts) {
            return redirect('contacts')
            ->with('success','Đã xóa liên hệ');
        }
    }
}
