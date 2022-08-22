<?php

namespace Hup234design\LaravelFilamentEnquiries\Http\Livewire;

use Hup234design\LaravelFilamentEnquiries\Models\Enquiry;
use Livewire\Component;

class EnquiryForm extends Component
{
    public Enquiry $enquiry;

    public bool $submitted = false;

    public function makeBlankEnquiry()
    {
        $this->enquiry = Enquiry::make();
    }

    public function rules()
    {
        return [
            'enquiry.name' => 'required|string|max:255',
            'enquiry.email' => 'required|email|max:255',
            'enquiry.telephone' => 'nullable|string|max:255',
            'enquiry.message' => 'required|string',
        ];
    }

    public function submit()
    {
        $this->validate();
        $this->enquiry->save();
        $this->submitted = true;
        $this->makeBlankEnquiry();
    }

    public function mount()
    {
        $this->makeBlankEnquiry();
        $this->submitted = false;
    }

    public function render()
    {
        return view('filament-enquiries::enquiry-form');
    }
}
