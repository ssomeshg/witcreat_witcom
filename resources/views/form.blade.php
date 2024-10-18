@extends('layout.admin') 

@section('content')  
                    <!--end::Header-->
                    <!--begin::Content-->
                    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
                        <!--begin::Subheader-->
                        <div class="subheader py-2 py-lg-6 subheader-solid" id="kt_subheader">
                            <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
                                <!--begin::Info-->
                                <div class="d-flex align-items-center flex-wrap mr-1">
                                    <!--begin::Page Heading-->
                                    <div class="d-flex align-items-baseline flex-wrap mr-5">
                                        <!--begin::Page Title-->
                                        <h5 class="text-dark font-weight-bold my-1 mr-5">Role</h5>
                                        <!--end::Page Title-->
                                     
                                    </div>
                                    <!--end::Page Heading-->
                                </div>
                                <!--end::Info-->
                            </div>
                        </div>
                        <!--end::Subheader-->
                        <!--begin::Entry-->
                        <div class="d-flex flex-column-fluid">
                            <!--begin::Container-->
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <!--begin::Card-->
                                        <div class="card card-custom gutter-b example example-compact">
                                            <div class="card-header">
                                                <h3 class="card-title">Add Role</h3>
                                               
                                            </div>
                                            <!--begin::Form-->
                                            <form>
                                                <div class="card-body">
                                                   
                                                    <div class="form-group">
                                                        <label>Email address
                                                        <span class="text-danger">*</span></label>
                                                        <input type="email" class="form-control" placeholder="Enter email" />
                                                        <span class="form-text text-muted">We'll never share your email with anyone else.</span>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleInputPassword1">Password
                                                        <span class="text-danger">*</span></label>
                                                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" />
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Static:</label>
                                                        <p class="form-control-plaintext text-muted">email@example.com</p>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleSelect1">Example select
                                                        <span class="text-danger">*</span></label>
                                                        <select class="form-control" id="exampleSelect1">
                                                            <option>1</option>
                                                            <option>2</option>
                                                            <option>3</option>
                                                            <option>4</option>
                                                            <option>5</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleSelect2">Example multiple select
                                                        <span class="text-danger">*</span></label>
                                                        <select multiple="multiple" class="form-control" id="exampleSelect2">
                                                            <option>1</option>
                                                            <option>2</option>
                                                            <option>3</option>
                                                            <option>4</option>
                                                            <option>5</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group mb-1">
                                                        <label for="exampleTextarea">Example textarea
                                                        <span class="text-danger">*</span></label>
                                                        <textarea class="form-control" id="exampleTextarea" rows="3"></textarea>
                                                    </div>
                                                    <!--begin: Code-->
                                                    <div class="example-code mt-10">
                                                        <div class="example-highlight">
                                                            <pre style="height:400px">
<code class="language-html">
       &lt;div class="card card-custom"&gt;
        &lt;div class="card-header"&gt;
         &lt;h3 class="card-title"&gt;
          Base Controls
         &lt;/h3&gt;
         &lt;div class="card-toolbar"&gt;
          &lt;div class="example-tools justify-content-center"&gt;
           &lt;span class="example-toggle" data-toggle="tooltip" title="View code"&gt;&lt;/span&gt;
           &lt;span class="example-copy" data-toggle="tooltip" title="Copy code"&gt;&lt;/span&gt;
          &lt;/div&gt;
         &lt;/div&gt;
        &lt;/div&gt;
        &lt;!--begin::Form--&gt;
        &lt;form&gt;
         &lt;div class="card-body"&gt;
          &lt;div class="form-group mb-8"&gt;
           &lt;div class="alert alert-custom alert-default" role="alert"&gt;
            &lt;div class="alert-icon"&gt;&lt;i class="flaticon-warning text-primary"&gt;&lt;/i&gt;&lt;/div&gt;
            &lt;div class="alert-text"&gt;
             The example form below demonstrates common HTML form elements that receive updated styles from Bootstrap with additional classes.
            &lt;/div&gt;
           &lt;/div&gt;
          &lt;/div&gt;
          &lt;div class="form-group"&gt;
           &lt;label&gt;Email address &lt;span class="text-danger"&gt;*&lt;/span&gt;&lt;/label&gt;
           &lt;input type="email" class="form-control"  placeholder="Enter email"/&gt;
           &lt;span class="form-text text-muted"&gt;We'll never share your email with anyone else.&lt;/span&gt;
          &lt;/div&gt;
          &lt;div class="form-group"&gt;
           &lt;label for="exampleInputPassword1"&gt;Password &lt;span class="text-danger"&gt;*&lt;/span&gt;&lt;/label&gt;
           &lt;input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password"/&gt;
          &lt;/div&gt;
          &lt;div class="form-group"&gt;
           &lt;label&gt;Static:&lt;/label&gt;
           &lt;p class="form-control-plaintext text-muted"&gt;email@example.com&lt;/p&gt;
          &lt;/div&gt;
          &lt;div class="form-group"&gt;
           &lt;label for="exampleSelect1"&gt;Example select &lt;span class="text-danger"&gt;*&lt;/span&gt;&lt;/label&gt;
           &lt;select class="form-control" id="exampleSelect1"&gt;
            &lt;option&gt;1&lt;/option&gt;
            &lt;option&gt;2&lt;/option&gt;
            &lt;option&gt;3&lt;/option&gt;
            &lt;option&gt;4&lt;/option&gt;
            &lt;option&gt;5&lt;/option&gt;
           &lt;/select&gt;
          &lt;/div&gt;
          &lt;div class="form-group"&gt;
           &lt;label for="exampleSelect2"&gt;Example multiple select &lt;span class="text-danger"&gt;*&lt;/span&gt;&lt;/label&gt;
           &lt;select multiple="" class="form-control" id="exampleSelect2"&gt;
            &lt;option&gt;1&lt;/option&gt;
            &lt;option&gt;2&lt;/option&gt;
            &lt;option&gt;3&lt;/option&gt;
            &lt;option&gt;4&lt;/option&gt;
            &lt;option&gt;5&lt;/option&gt;
           &lt;/select&gt;
          &lt;/div&gt;
          &lt;div class="form-group mb-1"&gt;
           &lt;label for="exampleTextarea"&gt;Example textarea &lt;span class="text-danger"&gt;*&lt;/span&gt;&lt;/label&gt;
           &lt;textarea class="form-control" id="exampleTextarea" rows="3"&gt;&lt;/textarea&gt;
          &lt;/div&gt;
         &lt;/div&gt;
         &lt;div class="card-footer"&gt;
          &lt;button type="reset" class="btn btn-primary mr-2"&gt;Submit&lt;/button&gt;
          &lt;button type="reset" class="btn btn-secondary"&gt;Cancel&lt;/button&gt;
         &lt;/div&gt;
        &lt;/form&gt;
        &lt;!--end::Form--&gt;
       &lt;/div&gt;
      </code>
</pre>
                                                        </div>
                                                    </div>
                                                    <!--end: Code-->
                                                </div>
                                                <div class="card-footer">
                                                    <button type="reset" class="btn btn-primary mr-2">Submit</button>
                                                    <button type="reset" class="btn btn-secondary">Cancel</button>
                                                </div>
                                            </form>
                                            <!--end::Form-->
                                        </div>
                                        <!--end::Card-->
                                        <!--begin::Card-->
                                        <div class="card card-custom gutter-b example example-compact">
                                            <div class="card-header">
                                                <h3 class="card-title">Textual HTML5 Inputs</h3>
                                                <div class="card-toolbar">
                                                    <div class="example-tools justify-content-center">
                                                        <span class="example-toggle" data-toggle="tooltip" title="View code"></span>
                                                        <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--begin::Form-->
                                            <form>
                                                <div class="card-body">
                                                    <div class="form-group mb-8">
                                                        <div class="alert alert-custom alert-default" role="alert">
                                                            <div class="alert-icon">
                                                                <span class="svg-icon svg-icon-primary svg-icon-xl">
                                                                    <!--begin::Svg Icon | path:assets/media/svg/icons/Tools/Compass.svg-->
                                                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                            <rect x="0" y="0" width="24" height="24" />
                                                                            <path d="M7.07744993,12.3040451 C7.72444571,13.0716094 8.54044565,13.6920474 9.46808594,14.1079953 L5,23 L4.5,18 L7.07744993,12.3040451 Z M14.5865511,14.2597864 C15.5319561,13.9019016 16.375416,13.3366121 17.0614026,12.6194459 L19.5,18 L19,23 L14.5865511,14.2597864 Z M12,3.55271368e-14 C12.8284271,3.53749572e-14 13.5,0.671572875 13.5,1.5 L13.5,4 L10.5,4 L10.5,1.5 C10.5,0.671572875 11.1715729,3.56793164e-14 12,3.55271368e-14 Z" fill="#000000" opacity="0.3" />
                                                                            <path d="M12,10 C13.1045695,10 14,9.1045695 14,8 C14,6.8954305 13.1045695,6 12,6 C10.8954305,6 10,6.8954305 10,8 C10,9.1045695 10.8954305,10 12,10 Z M12,13 C9.23857625,13 7,10.7614237 7,8 C7,5.23857625 9.23857625,3 12,3 C14.7614237,3 17,5.23857625 17,8 C17,10.7614237 14.7614237,13 12,13 Z" fill="#000000" fill-rule="nonzero" />
                                                                        </g>
                                                                    </svg>
                                                                    <!--end::Svg Icon-->
                                                                </span>
                                                            </div>
                                                            <div class="alert-text">Here are examples of
                                                            <code>.form-control</code>applied to each textual HTML5 input type:</div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-2 col-form-label">Text</label>
                                                        <div class="col-10">
                                                            <input class="form-control" type="text" value="Artisanal kale" id="example-text-input" />
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="example-search-input" class="col-2 col-form-label">Search</label>
                                                        <div class="col-10">
                                                            <input class="form-control" type="search" value="How do I shoot web" id="example-search-input" />
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="example-email-input" class="col-2 col-form-label">Email</label>
                                                        <div class="col-10">
                                                            <input class="form-control" type="email" value="bootstrap@example.com" id="example-email-input" />
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="example-url-input" class="col-2 col-form-label">URL</label>
                                                        <div class="col-10">
                                                            <input class="form-control" type="url" value="https://getbootstrap.com" id="example-url-input" />
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="example-tel-input" class="col-2 col-form-label">Telephone</label>
                                                        <div class="col-10">
                                                            <input class="form-control" type="tel" value="1-(555)-555-5555" id="example-tel-input" />
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="example-password-input" class="col-2 col-form-label">Password</label>
                                                        <div class="col-10">
                                                            <input class="form-control" type="password" value="hunter2" id="example-password-input" />
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="example-number-input" class="col-2 col-form-label">Number</label>
                                                        <div class="col-10">
                                                            <input class="form-control" type="number" value="42" id="example-number-input" />
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="example-datetime-local-input" class="col-2 col-form-label">Date and time</label>
                                                        <div class="col-10">
                                                            <input class="form-control" type="datetime-local" value="2011-08-19T13:45:00" id="example-datetime-local-input" />
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="example-date-input" class="col-2 col-form-label">Date</label>
                                                        <div class="col-10">
                                                            <input class="form-control" type="date" value="2011-08-19" id="example-date-input" />
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="example-month-input" class="col-2 col-form-label">Month</label>
                                                        <div class="col-10">
                                                            <input class="form-control" type="month" value="2011-08" id="example-month-input" />
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="example-week-input" class="col-2 col-form-label">Week</label>
                                                        <div class="col-10">
                                                            <input class="form-control" type="week" value="2011-W33" id="example-week-input" />
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="example-time-input" class="col-2 col-form-label">Time</label>
                                                        <div class="col-10">
                                                            <input class="form-control" type="time" value="13:45:00" id="example-time-input" />
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="example-color-input" class="col-2 col-form-label">Color</label>
                                                        <div class="col-10">
                                                            <input class="form-control" type="color" value="#563d7c" id="example-color-input" />
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="example-email-input" class="col-2 col-form-label">Range</label>
                                                        <div class="col-10">
                                                            <input class="form-control" type="range" />
                                                        </div>
                                                    </div>
                                                    <!--begin: Code-->
                                                    <div class="example-code mt-10">
                                                        <div class="example-highlight">
                                                            <pre style="height:400px">
<code class="language-html">
       &lt;div class="card card-custom"&gt;
        &lt;div class="card-header"&gt;
         &lt;h3 class="card-title"&gt;
          Textual HTML5 Inputs
         &lt;/h3&gt;
        &lt;/div&gt;
        &lt;!--begin::Form--&gt;
        &lt;form&gt;
         &lt;div class="card-body"&gt;
          &lt;div class="form-group mb-8"&gt;
           &lt;div class="alert alert-custom alert-default" role="alert"&gt;
            &lt;div class="alert-icon"&gt;&lt;i class="flaticon-warning text-primary"&gt;&lt;/i&gt;&lt;/div&gt;
            &lt;div class="alert-text"&gt;
             Here are examples of &lt;code&gt;.form-control&lt;/code&gt; applied to each textual HTML5 input type:
            &lt;/div&gt;
           &lt;/div&gt;
          &lt;/div&gt;
          &lt;div class="form-group row"&gt;
           &lt;label  class="col-2 col-form-label"&gt;Text&lt;/label&gt;
           &lt;div class="col-10"&gt;
            &lt;input class="form-control" type="text" value="Artisanal kale" id="example-text-input"/&gt;
           &lt;/div&gt;
          &lt;/div&gt;
          &lt;div class="form-group row"&gt;
           &lt;label for="example-search-input" class="col-2 col-form-label"&gt;Search&lt;/label&gt;
           &lt;div class="col-10"&gt;
            &lt;input class="form-control" type="search" value="How do I shoot web" id="example-search-input"/&gt;
           &lt;/div&gt;
          &lt;/div&gt;
          &lt;div class="form-group row"&gt;
           &lt;label for="example-email-input" class="col-2 col-form-label"&gt;Email&lt;/label&gt;
           &lt;div class="col-10"&gt;
            &lt;input class="form-control" type="email" value="bootstrap@example.com" id="example-email-input"/&gt;
           &lt;/div&gt;
          &lt;/div&gt;
          &lt;div class="form-group row"&gt;
           &lt;label for="example-url-input" class="col-2 col-form-label"&gt;URL&lt;/label&gt;
           &lt;div class="col-10"&gt;
            &lt;input class="form-control" type="url" value="https://getbootstrap.com" id="example-url-input"/&gt;
           &lt;/div&gt;
          &lt;/div&gt;
          &lt;div class="form-group row"&gt;
           &lt;label for="example-tel-input" class="col-2 col-form-label"&gt;Telephone&lt;/label&gt;
           &lt;div class="col-10"&gt;
            &lt;input class="form-control" type="tel" value="1-(555)-555-5555" id="example-tel-input"/&gt;
           &lt;/div&gt;
          &lt;/div&gt;
          &lt;div class="form-group row"&gt;
           &lt;label for="example-password-input" class="col-2 col-form-label"&gt;Password&lt;/label&gt;
           &lt;div class="col-10"&gt;
            &lt;input class="form-control" type="password" value="hunter2" id="example-password-input"/&gt;
           &lt;/div&gt;
          &lt;/div&gt;
          &lt;div class="form-group row"&gt;
           &lt;label for="example-number-input" class="col-2 col-form-label"&gt;Number&lt;/label&gt;
           &lt;div class="col-10"&gt;
            &lt;input class="form-control" type="number" value="42" id="example-number-input"/&gt;
           &lt;/div&gt;
          &lt;/div&gt;
          &lt;div class="form-group row"&gt;
           &lt;label for="example-datetime-local-input" class="col-2 col-form-label"&gt;Date and time&lt;/label&gt;
           &lt;div class="col-10"&gt;
            &lt;input class="form-control" type="datetime-local" value="2011-08-19T13:45:00" id="example-datetime-local-input"/&gt;
           &lt;/div&gt;
          &lt;/div&gt;
          &lt;div class="form-group row"&gt;
           &lt;label for="example-date-input" class="col-2 col-form-label"&gt;Date&lt;/label&gt;
           &lt;div class="col-10"&gt;
            &lt;input class="form-control" type="date" value="2011-08-19" id="example-date-input"/&gt;
           &lt;/div&gt;
          &lt;/div&gt;
          &lt;div class="form-group row"&gt;
           &lt;label for="example-month-input" class="col-2 col-form-label"&gt;Month&lt;/label&gt;
           &lt;div class="col-10"&gt;
            &lt;input class="form-control" type="month" value="2011-08" id="example-month-input"/&gt;
           &lt;/div&gt;
          &lt;/div&gt;
          &lt;div class="form-group row"&gt;
           &lt;label for="example-week-input" class="col-2 col-form-label"&gt;Week&lt;/label&gt;
           &lt;div class="col-10"&gt;
            &lt;input class="form-control" type="week" value="2011-W33" id="example-week-input"/&gt;
           &lt;/div&gt;
          &lt;/div&gt;
          &lt;div class="form-group row"&gt;
           &lt;label for="example-time-input" class="col-2 col-form-label"&gt;Time&lt;/label&gt;
           &lt;div class="col-10"&gt;
            &lt;input class="form-control" type="time" value="13:45:00" id="example-time-input"/&gt;
           &lt;/div&gt;
          &lt;/div&gt;
          &lt;div class="form-group row"&gt;
           &lt;label for="example-color-input" class="col-2 col-form-label"&gt;Color&lt;/label&gt;
           &lt;div class="col-10"&gt;
            &lt;input class="form-control" type="color" value="#563d7c" id="example-color-input"/&gt;
           &lt;/div&gt;
          &lt;/div&gt;
          &lt;div class="form-group row"&gt;
           &lt;label for="example-email-input" class="col-2 col-form-label"&gt;Range&lt;/label&gt;
           &lt;div class="col-10"&gt;
            &lt;input class="form-control" type="range"/&gt;
           &lt;/div&gt;
          &lt;/div&gt;
         &lt;/div&gt;
         &lt;div class="card-footer"&gt;
          &lt;div class="row"&gt;
           &lt;div class="col-2"&gt;
           &lt;/div&gt;
           &lt;div class="col-10"&gt;
            &lt;button type="reset" class="btn btn-success mr-2"&gt;Submit&lt;/button&gt;
            &lt;button type="reset" class="btn btn-secondary"&gt;Cancel&lt;/button&gt;
           &lt;/div&gt;
          &lt;/div&gt;
         &lt;/div&gt;
        &lt;/form&gt;
       &lt;/div&gt;
      </code>
</pre>
                                                        </div>
                                                    </div>
                                                    <!--end: Code-->
                                                </div>
                                                <div class="card-footer">
                                                    <div class="row">
                                                        <div class="col-2"></div>
                                                        <div class="col-10">
                                                            <button type="reset" class="btn btn-success mr-2">Submit</button>
                                                            <button type="reset" class="btn btn-secondary">Cancel</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <!--end::Card-->
                                        <!--begin::Card-->
                                        <div class="card card-custom gutter-b example example-compact">
                                            <div class="card-header">
                                                <h3 class="card-title">Solid Background Style</h3>
                                                <div class="card-toolbar">
                                                    <div class="example-tools justify-content-center">
                                                        <span class="example-toggle" data-toggle="tooltip" title="View code"></span>
                                                        <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--begin::Form-->
                                            <form class="form">
                                                <div class="card-body">
                                                    <div class="form-group form-group-last">
                                                        <div class="alert alert-custom alert-default" role="alert">
                                                            <div class="alert-icon">
                                                                <span class="svg-icon svg-icon-primary svg-icon-xl">
                                                                    <!--begin::Svg Icon | path:assets/media/svg/icons/Tools/Compass.svg-->
                                                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                            <rect x="0" y="0" width="24" height="24" />
                                                                            <path d="M7.07744993,12.3040451 C7.72444571,13.0716094 8.54044565,13.6920474 9.46808594,14.1079953 L5,23 L4.5,18 L7.07744993,12.3040451 Z M14.5865511,14.2597864 C15.5319561,13.9019016 16.375416,13.3366121 17.0614026,12.6194459 L19.5,18 L19,23 L14.5865511,14.2597864 Z M12,3.55271368e-14 C12.8284271,3.53749572e-14 13.5,0.671572875 13.5,1.5 L13.5,4 L10.5,4 L10.5,1.5 C10.5,0.671572875 11.1715729,3.56793164e-14 12,3.55271368e-14 Z" fill="#000000" opacity="0.3" />
                                                                            <path d="M12,10 C13.1045695,10 14,9.1045695 14,8 C14,6.8954305 13.1045695,6 12,6 C10.8954305,6 10,6.8954305 10,8 C10,9.1045695 10.8954305,10 12,10 Z M12,13 C9.23857625,13 7,10.7614237 7,8 C7,5.23857625 9.23857625,3 12,3 C14.7614237,3 17,5.23857625 17,8 C17,10.7614237 14.7614237,13 12,13 Z" fill="#000000" fill-rule="nonzero" />
                                                                        </g>
                                                                    </svg>
                                                                    <!--end::Svg Icon-->
                                                                </span>
                                                            </div>
                                                            <div class="alert-text">Add the
                                                            <code>.form-controller-solid</code>class on an input to have an input with solid background.</div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Input</label>
                                                        <input type="email" class="form-control form-control-solid" placeholder="Example input" />
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Select</label>
                                                        <select class="form-control form-control-solid">
                                                            <option>1</option>
                                                            <option>2</option>
                                                            <option>3</option>
                                                            <option>4</option>
                                                            <option>5</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleTextarea">Textarea</label>
                                                        <textarea class="form-control form-control-solid" rows="3"></textarea>
                                                    </div>
                                                    <!--begin: Code-->
                                                    <div class="example-code mt-10">
                                                        <div class="example-highlight">
                                                            <pre style="height:400px">
<code class="language-html">
       &lt;div class="card card-custom"&gt;
        &lt;div class="card-header"&gt;
         &lt;h3 class="card-title"&gt;
          Input States
         &lt;/h3&gt;
        &lt;/div&gt;
        &lt;!--begin::Form--&gt;
        &lt;form class="form"&gt;
         &lt;div class="card-body"&gt;
          &lt;div class="form-group form-group-last"&gt;
           &lt;div class="alert alert-custom alert-default" role="alert"&gt;
            &lt;div class="alert-icon"&gt;&lt;i class="flaticon-warning text-primary"&gt;&lt;/i&gt;&lt;/div&gt;
            &lt;div class="alert-text"&gt;
             Add the &lt;code&gt;disabled&lt;/code&gt; or &lt;code&gt;readonly&lt;/code&gt; boolean attribute on an input to prevent user interactions.
             Disabled inputs appear lighter and add a &lt;code&gt;not-allowed&lt;/code&gt; cursor.
            &lt;/div&gt;
           &lt;/div&gt;
          &lt;/div&gt;
          &lt;div class="form-group"&gt;
           &lt;label&gt;Input&lt;/label&gt;
           &lt;input type="email" class="form-control form-control-solid" placeholder="Example input"/&gt;
          &lt;/div&gt;
          &lt;div class="form-group"&gt;
           &lt;label&gt;Select&lt;/label&gt;
           &lt;select class="form-control form-control-solid"&gt;
            &lt;option&gt;1&lt;/option&gt;
            &lt;option&gt;2&lt;/option&gt;
            &lt;option&gt;3&lt;/option&gt;
            &lt;option&gt;4&lt;/option&gt;
            &lt;option&gt;5&lt;/option&gt;
           &lt;/select&gt;
          &lt;/div&gt;
          &lt;div class="form-group"&gt;
           &lt;label for="exampleTextarea"&gt;Textarea&lt;/label&gt;
           &lt;textarea class="form-control form-control-solid" rows="3"&gt;&lt;/textarea&gt;
          &lt;/div&gt;
         &lt;/div&gt;
         &lt;div class="card-footer"&gt;
          &lt;button type="reset" class="btn btn-primary mr-2"&gt;Submit&lt;/button&gt;
          &lt;button type="reset" class="btn btn-secondary"&gt;Cancel&lt;/button&gt;
         &lt;/div&gt;
        &lt;/form&gt;
        &lt;!--end::Form--&gt;
       &lt;/div&gt;
      </code>
</pre>
                                                        </div>
                                                    </div>
                                                    <!--end: Code-->
                                                </div>
                                                <div class="card-footer">
                                                    <button type="reset" class="btn btn-primary mr-2">Submit</button>
                                                    <button type="reset" class="btn btn-secondary">Cancel</button>
                                                </div>
                                            </form>
                                            <!--end::Form-->
                                        </div>
                                        <!--end::Card-->
                                    </div>
                                  
                                </div>
                            </div>
                            <!--end::Container-->
                        </div>
                        <!--end::Entry-->
                    </div>

                    <!--end::Content-->
                    <!--begin::Footer-->
 @endsection                     