<section class="row">
    <div class="col-md-7 d-flex tm-contact-left-col">
      <div class="tm-bg-primary tm-contact-left">
        <div class="tm-contact-left-inner">
          <h2 class="text-center tm-mb-40 tm-contact-header">HERE WE ARE</h2>
          <p class="tm-line-height-2 mb-5">Etiam congue tempor risus, id porta massa laoreet at. Nunc risus elit, porttitor sit amet sem.</p>
          <div class="mb-2 tm-font-normal">
            Tel: <a href="tel:0900900990" class="mt-5 tm-contact-link">090-090-0990</a>
          </div>
          <div class="mb-2 tm-font-normal">
            Fax: <a href="tel:0800800880" class="tm-contact-link">080-080-0880</a>
          </div>
          <div class="mb-2 tm-font-normal">
            Email: <a href="mailto:info@company.com" class="tm-contact-link">info@company.com</a>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-4">
       {!! Form::open(array('route' => 'send_email', 'class' => 'form contactForm')) !!}
        <div class="form-group mb-4">
        {!! Form::text('name', null, 
            array('required', 
                  'class'=>'form-control', 
                  'placeholder'=>'Όνομα')) !!}
        </div>
        <div class="form-group mb-4">
         {!! Form::text('email', null, 
            array('required', 
                  'class'=>'form-control', 
                  'placeholder'=>'E-mail')) !!}
        </div>
        <div class="form-group mb-4">
          {!! Form::textarea('message', null, 
            array('required', 
                  'class'=>'form-control', 
                  'placeholder'=>'Το μήνυμά σου...')) !!}
        </div>
        <div class="form-group mb-0">
          {!! Form::submit('Αποστολη', 
      array('class'=>'btn btn-primary tm-btn-round tm-fl-right')) !!}
        </div>
        {!! Form::close() !!}
    </div>
</section>
