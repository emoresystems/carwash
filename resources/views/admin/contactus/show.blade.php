<!-- resources/views/contacts/show.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Contact Details</div>

                <div class="card-body">
                    <div>
                        <strong>Name:</strong> {{ $contact->name }}
                    </div>
                    <div>
                        <strong>Email:</strong> {{ $contact->email }}
                    </div>
                    <div>
                        <strong>Phone:</strong> {{ $contact->phone }}
                    </div>
                    <div>
                        <strong>Subject:</strong> {{ $contact->subject }}
                    </div>
                    <div>
                        <strong>Message:</strong> {{ $contact->message }}
                    </div>
                    <div>
                        <strong>Subscribe:</strong> {{ $contact->subscribe ? 'Yes' : 'No' }}
                    </div>
                </div>

                <div class="card-footer">
                    <a href="{{ route('contacts.index') }}" class="btn btn-secondary">Back</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
