<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;

class ContactController extends AbstractController
{
    public function submit (ContactRequest $req) {
        /*$validation = $req->validate([
            'subject' => 'required|min:5|max:50',
            'message' => 'required|min:50|max:500'
        ]);*/
        //dd($req->input('subject'));

        $contact = new Contact();
        $contact->name = $req->input('name');
        $contact->email = $req->input('email');
        $contact->subject = $req->input('subject');
        $contact->message = $req->input('message');
        $contact->save();
        return redirect()->route('home')->with('success', 'Сообщение было добавлено');
    }

    public function allData () {
        //dd(Contact::all());
        //$contact->inRandomOrder()->get()
        //$contact->orderBy('id', 'desc')->take(1)->get()
        //$contact->orderBy('id', 'desc')->skip(1)->get()
        //$contact->where('subject', '=', 'Вот так уот')->get()
        //$contact->where('subject', '<>', 'Вот так уот')->get()
        //$contact->where('subject', '>=', 'Вот так уот')->get()
        //$contact->where('subject', '<=', 'Вот так уот')->get()
        //$contact->where('subject', '>', 'Вот так уот')->get()
        //$contact->where('subject', '<', 'Вот так уот')->get()
        //$contact = new Contact;
        return view('messages', ['data' => Contact::all()]);
    }

    public function showOneMessage($id) {
        $contact = new Contact;
        return view('one-message', ['data' => $contact->find($id)]);
    }

    public function updateMessage($id) {
        $contact = new Contact;
        return view('update-message', ['data' => $contact->find($id)]);
    }

    public function updateMessageSubmit ($id, ContactRequest $req) {
        $contact = Contact::find($id);
        $contact->name = $req->input('name');
        $contact->email = $req->input('email');
        $contact->subject = $req->input('subject');
        $contact->message = $req->input('message');
        $contact->save();
        return redirect()->route('contact-data-one', $id)->with('success', 'Сообщение было обновлено');
    }

    public function deleteMessage ($id) {
        Contact::find($id)->delete();
        return redirect()->route('contact-data')->with('success', 'Сообщение было удалено');
    }
}
