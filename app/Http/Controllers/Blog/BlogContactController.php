<?php

namespace App\Http\Controllers\Blog;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactRequest;
use App\Mail\ContactMail;
use App\Traits\DynamicDataTrait;
use Illuminate\Support\Facades\Mail;

class BlogContactController extends Controller
{
    use DynamicDataTrait;

    /**
     * Show the application contact page.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pageData = [
            'pageTitle' => trans('larablog.contact.pageTitle'),
            'pageDesc'  => trans('larablog.contact.pageDesc'),
            'title'     => trans('larablog.contact.title'),
            'subtitle'  => trans('larablog.contact.subtitle'),
            'image'     => config('blog.contact_page_image'),
            'logoText'  => $this->getLogoText(),
            'sections'  => [
                'footer' => $this->getFooterData(),
            ],
        ];

        return view('blog.pages.contact', $pageData);
    }

    /**
     * Send Contact Email Function via Mail.
     *
     * @return \Illuminate\Http\Response
     */
    public function contactSend(ContactRequest $request)
    {
        $validatedData = $request->validated();

        Mail::to(config('blog.contact_email'))->send(new ContactMail($validatedData));

        return back()->withSuccess(trans('forms.contact.messages.sent'));
    }
}
