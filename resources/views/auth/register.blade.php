@extends('layout.app')
@section('title')
<title>Registration | KeyTech</title>
@endsection
@section('content')
<h2 class="mb-2 lh-sm">Wizard form</h2>
<p class="text-body-tertiary lead mb-2">A form UI to enable users to achieve a goal through a series of steps.</p>
<div class="row mb-9">
    <div class="col-12 col-xxl-6">
        <div class="card shadow-none border my-4" data-component-card="data-component-card">
            <div class="card-header p-4 border-bottom bg-body">
                <div class="row g-3 justify-content-between align-items-center">
                    <div class="col-12 col-md">
                        <h4 class="text-body mb-0" data-anchor="data-anchor">Progress Tab</h4>
                    </div>
                    <div class="col col-md-auto">
                        <nav class="nav justify-content-end doc-tab-nav align-items-center" role="tablist"><button class="btn btn-link px-2 text-body copy-code-btn" type="button"><span class="fas fa-copy me-1"></span>Copy Code</button><a class="btn btn-sm btn-phoenix-primary code-btn ms-2" data-bs-toggle="collapse" href="#progress-tab-code" role="button" aria-controls="progress-tab-code" aria-expanded="false"> <span class="me-2" data-feather="code"></span>View code</a><a class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span class="me-2" data-feather="eye"></span>Preview</a></nav>
                    </div>
                </div>
            </div>
            <div class="card-body p-0">
                <div class="collapse code-collapse" id="progress-tab-code">
                    <pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;div class=&quot;card theme-wizard mb-5&quot; data-theme-wizard=&quot;data-theme-wizard&quot;&gt;
  &lt;div class=&quot;card-header bg-body-highlight pt-3 pb-2 border-bottom-0&quot;&gt;
    &lt;ul class=&quot;nav justify-content-between nav-wizard&quot;&gt;
      &lt;li class=&quot;nav-item&quot;&gt;&lt;a class=&quot;nav-link active fw-semibold&quot; href=&quot;#bootstrap-wizard-tab1&quot; data-bs-toggle=&quot;tab&quot; data-wizard-step=&quot;1&quot;&gt;
          &lt;div class=&quot;text-center d-inline-block&quot;&gt;&lt;span class=&quot;nav-item-circle-parent&quot;&gt;&lt;span class=&quot;nav-item-circle&quot;&gt;&lt;span class=&quot;fas fa-lock&quot;&gt;&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;span class=&quot;d-none d-md-block mt-1 fs-9&quot;&gt;Account&lt;/span&gt;&lt;/div&gt;
        &lt;/a&gt;&lt;/li&gt;
      &lt;li class=&quot;nav-item&quot;&gt;&lt;a class=&quot;nav-link fw-semibold&quot; href=&quot;#bootstrap-wizard-tab2&quot; data-bs-toggle=&quot;tab&quot; data-wizard-step=&quot;2&quot;&gt;
          &lt;div class=&quot;text-center d-inline-block&quot;&gt;&lt;span class=&quot;nav-item-circle-parent&quot;&gt;&lt;span class=&quot;nav-item-circle&quot;&gt;&lt;span class=&quot;fas fa-user&quot;&gt;&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;span class=&quot;d-none d-md-block mt-1 fs-9&quot;&gt;Personal&lt;/span&gt;&lt;/div&gt;
        &lt;/a&gt;&lt;/li&gt;
      &lt;li class=&quot;nav-item&quot;&gt;&lt;a class=&quot;nav-link fw-semibold&quot; href=&quot;#bootstrap-wizard-tab3&quot; data-bs-toggle=&quot;tab&quot; data-wizard-step=&quot;3&quot;&gt;
          &lt;div class=&quot;text-center d-inline-block&quot;&gt;&lt;span class=&quot;nav-item-circle-parent&quot;&gt;&lt;span class=&quot;nav-item-circle&quot;&gt;&lt;span class=&quot;fas fa-file-alt&quot;&gt;&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;span class=&quot;d-none d-md-block mt-1 fs-9&quot;&gt;Billing&lt;/span&gt;&lt;/div&gt;
        &lt;/a&gt;&lt;/li&gt;
      &lt;li class=&quot;nav-item&quot;&gt;&lt;a class=&quot;nav-link fw-semibold&quot; href=&quot;#bootstrap-wizard-tab4&quot; data-bs-toggle=&quot;tab&quot; data-wizard-step=&quot;4&quot;&gt;
          &lt;div class=&quot;text-center d-inline-block&quot;&gt;&lt;span class=&quot;nav-item-circle-parent&quot;&gt;&lt;span class=&quot;nav-item-circle&quot;&gt;&lt;span class=&quot;fas fa-check&quot;&gt;&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;span class=&quot;d-none d-md-block mt-1 fs-9&quot;&gt;Done&lt;/span&gt;&lt;/div&gt;
        &lt;/a&gt;&lt;/li&gt;
    &lt;/ul&gt;
  &lt;/div&gt;
  &lt;div class=&quot;card-body pt-4 pb-0&quot;&gt;
    &lt;div class=&quot;tab-content&quot;&gt;
      &lt;div class=&quot;tab-pane active&quot; role=&quot;tabpanel&quot; aria-labelledby=&quot;bootstrap-wizard-tab1&quot; id=&quot;bootstrap-wizard-tab1&quot;&gt;
        &lt;form id=&quot;wizardForm1&quot; novalidate=&quot;novalidate&quot; data-wizard-form=&quot;1&quot;&gt;
          &lt;div class=&quot;mb-2&quot;&gt;&lt;label class=&quot;form-label text-body&quot; for=&quot;bootstrap-wizard-wizard-name&quot;&gt;Name&lt;/label&gt;&lt;input class=&quot;form-control&quot; type=&quot;text&quot; name=&quot;name&quot; placeholder=&quot;John Smith&quot; id=&quot;bootstrap-wizard-wizard-name&quot; /&gt;&lt;/div&gt;
          &lt;div class=&quot;mb-2&quot;&gt;&lt;label class=&quot;form-label&quot; for=&quot;bootstrap-wizard-wizard-email&quot;&gt;Email*&lt;/label&gt;&lt;input class=&quot;form-control&quot; type=&quot;email&quot; name=&quot;email&quot; placeholder=&quot;Email address&quot; pattern=&quot;^([a-zA-Z0-9_.-])+@(([a-zA-Z0-9-])+.)+([a-zA-Z0-9]{2,4})+$&quot; id=&quot;bootstrap-wizard-wizard-email&quot; /&gt;&lt;/div&gt;
          &lt;div class=&quot;row g-3 mb-3&quot;&gt;
            &lt;div class=&quot;col-sm-6&quot;&gt;
              &lt;div class=&quot;mb-2 mb-sm-0&quot;&gt;&lt;label class=&quot;form-label text-body&quot; for=&quot;bootstrap-wizard-wizard-password&quot;&gt;Password*&lt;/label&gt;&lt;input class=&quot;form-control&quot; type=&quot;password&quot; name=&quot;password&quot; placeholder=&quot;Password&quot; id=&quot;bootstrap-wizard-wizard-password&quot; data-wizard-password=&quot;true&quot; /&gt;&lt;/div&gt;
            &lt;/div&gt;
            &lt;div class=&quot;col-sm-6&quot;&gt;
              &lt;div class=&quot;mb-2&quot;&gt;&lt;label class=&quot;form-label text-body&quot; for=&quot;bootstrap-wizard-wizard-confirm-password&quot;&gt;Confirm Password*&lt;/label&gt;&lt;input class=&quot;form-control&quot; type=&quot;password&quot; name=&quot;confirmPassword&quot; placeholder=&quot;Confirm Password&quot; id=&quot;bootstrap-wizard-wizard-confirm-password&quot; data-wizard-confirm-password=&quot;true&quot; /&gt;&lt;/div&gt;
            &lt;/div&gt;
          &lt;/div&gt;
          &lt;div class=&quot;form-check&quot;&gt;&lt;input class=&quot;form-check-input&quot; type=&quot;checkbox&quot; name=&quot;terms&quot; checked=&quot;checked&quot; id=&quot;bootstrap-wizard-wizard-checkbox&quot; /&gt;&lt;label class=&quot;form-check-label text-body&quot; for=&quot;bootstrap-wizard-wizard-checkbox&quot;&gt;I accept the &lt;a href=&quot;#!&quot;&gt;terms &lt;/a&gt;and &lt;a href=&quot;#!&quot;&gt;privacy policy&lt;/a&gt;&lt;/label&gt;&lt;/div&gt;
        &lt;/form&gt;
      &lt;/div&gt;
      &lt;div class=&quot;tab-pane&quot; role=&quot;tabpanel&quot; aria-labelledby=&quot;bootstrap-wizard-tab2&quot; id=&quot;bootstrap-wizard-tab2&quot;&gt;
        &lt;form id=&quot;wizardForm2&quot; novalidate=&quot;novalidate&quot; data-wizard-form=&quot;2&quot;&gt;
          &lt;div class=&quot;row g-4 mb-4&quot; data-dropzone=&quot;data-dropzone&quot; data-options='{&quot;maxFiles&quot;:1,&quot;data&quot;:[{&quot;name&quot;:&quot;avatar.webp&quot;,&quot;size&quot;:&quot;54kb&quot;,&quot;url&quot;:&quot;../../assets/img/team&quot;}]}'&gt;
            &lt;div class=&quot;fallback&quot;&gt;&lt;input type=&quot;file&quot; name=&quot;file&quot; /&gt;&lt;/div&gt;
            &lt;div class=&quot;col-md-auto&quot;&gt;
              &lt;div class=&quot;dz-preview dz-preview-single&quot;&gt;
                &lt;div class=&quot;dz-preview-cover d-flex align-items-center justify-content-center mb-2 mb-md-0&quot;&gt;
                  &lt;div class=&quot;avatar avatar-4xl&quot;&gt;&lt;img class=&quot;rounded-circle avatar-placeholder&quot; src=&quot;../../assets/img/team/avatar.webp&quot; alt=&quot;...&quot; data-dz-thumbnail=&quot;data-dz-thumbnail&quot; /&gt;&lt;/div&gt;
                  &lt;div class=&quot;dz-progress&quot;&gt;&lt;span class=&quot;dz-upload&quot; data-dz-uploadprogress=&quot;&quot;&gt;&lt;/span&gt;&lt;/div&gt;
                &lt;/div&gt;
              &lt;/div&gt;
            &lt;/div&gt;
            &lt;div class=&quot;col-md&quot;&gt;
              &lt;div class=&quot;dz-message dropzone-area px-2 py-3&quot; data-dz-message=&quot;data-dz-message&quot;&gt;
                &lt;div class=&quot;text-center text-body-emphasis&quot;&gt;
                  &lt;h5 class=&quot;mb-2&quot;&gt;&lt;span class=&quot;fa-solid fa-upload me-2&quot;&gt;&lt;/span&gt;Upload Profile Picture&lt;/h5&gt;
                  &lt;p class=&quot;mb-0 fs-9 text-body-tertiary text-opacity-85 lh-sm&quot;&gt;Upload a 300x300 jpg image with &lt;br /&gt;a maximum size of 400KB&lt;/p&gt;
                &lt;/div&gt;
              &lt;/div&gt;
            &lt;/div&gt;
          &lt;/div&gt;
          &lt;div class=&quot;mb-2&quot;&gt;&lt;label class=&quot;form-label&quot; for=&quot;bootstrap-wizard-gender&quot;&gt;Gender&lt;/label&gt;&lt;select class=&quot;form-select&quot; name=&quot;gender&quot; id=&quot;bootstrap-wizard-gender&quot;&gt;
              &lt;option value=&quot;&quot;&gt;Select your gender ...&lt;/option&gt;
              &lt;option value=&quot;Male&quot;&gt;Male&lt;/option&gt;
              &lt;option value=&quot;Female&quot;&gt;Female&lt;/option&gt;
              &lt;option value=&quot;Other&quot;&gt;Other&lt;/option&gt;
            &lt;/select&gt;&lt;/div&gt;
          &lt;div class=&quot;mb-2&quot;&gt;&lt;label class=&quot;form-label&quot; for=&quot;bootstrap-wizard-wizard-phone&quot;&gt;Phone&lt;/label&gt;&lt;input class=&quot;form-control&quot; type=&quot;text&quot; name=&quot;phone&quot; placeholder=&quot;Phone&quot; id=&quot;bootstrap-wizard-wizard-phone&quot; /&gt;&lt;/div&gt;
          &lt;div class=&quot;mb-2&quot;&gt;&lt;label class=&quot;form-label&quot; for=&quot;bootstrap-wizard-wizard-datepicker&quot;&gt;Date of Birth&lt;/label&gt;&lt;input class=&quot;form-control datetimepicker&quot; type=&quot;text&quot; placeholder=&quot;d/m/y&quot; data-options='{&quot;dateFormat&quot;:&quot;d/m/y&quot;,&quot;disableMobile&quot;:true}' id=&quot;bootstrap-wizard-wizard-datepicker&quot; /&gt;&lt;/div&gt;
          &lt;div class=&quot;mb-2&quot;&gt;&lt;label class=&quot;form-label&quot; for=&quot;bootstrap-wizard-wizard-address&quot;&gt;Address&lt;/label&gt;&lt;textarea class=&quot;form-control&quot; rows=&quot;4&quot; id=&quot;bootstrap-wizard-wizard-address&quot;&gt;&lt;/textarea&gt;&lt;/div&gt;
        &lt;/form&gt;
      &lt;/div&gt;
      &lt;div class=&quot;tab-pane&quot; role=&quot;tabpanel&quot; aria-labelledby=&quot;bootstrap-wizard-tab3&quot; id=&quot;bootstrap-wizard-tab3&quot;&gt;
        &lt;form class=&quot;mb-2&quot; id=&quot;wizardForm3&quot; novalidate=&quot;novalidate&quot; data-wizard-form=&quot;3&quot;&gt;
          &lt;div class=&quot;row gx-3 gy-2&quot;&gt;
            &lt;div class=&quot;col-6&quot;&gt;&lt;label class=&quot;form-label&quot; for=&quot;bootstrap-wizard-card-number&quot;&gt;Card Number&lt;/label&gt;&lt;input class=&quot;form-control&quot; placeholder=&quot;XXXX XXXX XXXX XXXX&quot; type=&quot;text&quot; id=&quot;bootstrap-wizard-card-number&quot; /&gt;&lt;/div&gt;
            &lt;div class=&quot;col-6&quot;&gt;&lt;label class=&quot;form-label&quot; for=&quot;bootstrap-wizard-card-name&quot;&gt;Name&lt;/label&gt;&lt;input class=&quot;form-control&quot; placeholder=&quot;John Doe&quot; name=&quot;cardName&quot; type=&quot;text&quot; id=&quot;bootstrap-wizard-card-name&quot; /&gt;&lt;/div&gt;
            &lt;div class=&quot;col-6&quot;&gt;&lt;label class=&quot;form-label&quot; for=&quot;bootstrap-wizard-card-holder-country&quot;&gt;Country&lt;/label&gt;&lt;select class=&quot;form-select&quot; name=&quot;customSelectCountry&quot; id=&quot;bootstrap-wizard-card-holder-country&quot;&gt;
                &lt;option value=&quot;&quot;&gt;Select your country ...&lt;/option&gt;
                &lt;option value=&quot;Afghanistan&quot;&gt;Afghanistan&lt;/option&gt;
                &lt;option value=&quot;Albania&quot;&gt;Albania&lt;/option&gt;
                &lt;option value=&quot;Algeria&quot;&gt;Algeria&lt;/option&gt;
                &lt;option value=&quot;American Samoa&quot;&gt;American Samoa&lt;/option&gt;
                &lt;option value=&quot;Andorra&quot;&gt;Andorra&lt;/option&gt;
                &lt;option value=&quot;Angola&quot;&gt;Angola&lt;/option&gt;
                &lt;option value=&quot;Anguilla&quot;&gt;Anguilla&lt;/option&gt;
                &lt;option value=&quot;Antarctica&quot;&gt;Antarctica&lt;/option&gt;
                &lt;option value=&quot;Antigua and Barbuda&quot;&gt;Antigua and Barbuda&lt;/option&gt;
                &lt;option value=&quot;Argentina&quot;&gt;Argentina&lt;/option&gt;
                &lt;option value=&quot;Armenia&quot;&gt;Armenia&lt;/option&gt;
                &lt;option value=&quot;Aruba&quot;&gt;Aruba&lt;/option&gt;
                &lt;option value=&quot;Australia&quot;&gt;Australia&lt;/option&gt;
                &lt;option value=&quot;Austria&quot;&gt;Austria&lt;/option&gt;
                &lt;option value=&quot;Azerbaijan&quot;&gt;Azerbaijan&lt;/option&gt;
                &lt;option value=&quot;Bahamas&quot;&gt;Bahamas&lt;/option&gt;
                &lt;option value=&quot;Bahrain&quot;&gt;Bahrain&lt;/option&gt;
                &lt;option value=&quot;Bangladesh&quot;&gt;Bangladesh&lt;/option&gt;
                &lt;option value=&quot;Barbados&quot;&gt;Barbados&lt;/option&gt;
                &lt;option value=&quot;Belarus&quot;&gt;Belarus&lt;/option&gt;
                &lt;option value=&quot;Belgium&quot;&gt;Belgium&lt;/option&gt;
                &lt;option value=&quot;Belize&quot;&gt;Belize&lt;/option&gt;
                &lt;option value=&quot;Benin&quot;&gt;Benin&lt;/option&gt;
                &lt;option value=&quot;Bermuda&quot;&gt;Bermuda&lt;/option&gt;
                &lt;option value=&quot;Bhutan&quot;&gt;Bhutan&lt;/option&gt;
                &lt;option value=&quot;Bolivia&quot;&gt;Bolivia&lt;/option&gt;
                &lt;option value=&quot;Bosnia and Herzegowina&quot;&gt;Bosnia and Herzegowina&lt;/option&gt;
                &lt;option value=&quot;Botswana&quot;&gt;Botswana&lt;/option&gt;
                &lt;option value=&quot;Bouvet Island&quot;&gt;Bouvet Island&lt;/option&gt;
                &lt;option value=&quot;Brazil&quot;&gt;Brazil&lt;/option&gt;
                &lt;option value=&quot;British Indian Ocean Territory&quot;&gt;British Indian Ocean Territory&lt;/option&gt;
                &lt;option value=&quot;Brunei Darussalam&quot;&gt;Brunei Darussalam&lt;/option&gt;
                &lt;option value=&quot;Bulgaria&quot;&gt;Bulgaria&lt;/option&gt;
                &lt;option value=&quot;Burkina Faso&quot;&gt;Burkina Faso&lt;/option&gt;
                &lt;option value=&quot;Burundi&quot;&gt;Burundi&lt;/option&gt;
                &lt;option value=&quot;Cambodia&quot;&gt;Cambodia&lt;/option&gt;
                &lt;option value=&quot;Cameroon&quot;&gt;Cameroon&lt;/option&gt;
                &lt;option value=&quot;Canada&quot;&gt;Canada&lt;/option&gt;
                &lt;option value=&quot;Cape Verde&quot;&gt;Cape Verde&lt;/option&gt;
                &lt;option value=&quot;Cayman Islands&quot;&gt;Cayman Islands&lt;/option&gt;
                &lt;option value=&quot;Central African Republic&quot;&gt;Central African Republic&lt;/option&gt;
                &lt;option value=&quot;Chad&quot;&gt;Chad&lt;/option&gt;
                &lt;option value=&quot;Chile&quot;&gt;Chile&lt;/option&gt;
                &lt;option value=&quot;China&quot;&gt;China&lt;/option&gt;
                &lt;option value=&quot;Christmas Island&quot;&gt;Christmas Island&lt;/option&gt;
                &lt;option value=&quot;Cocos (Keeling) Islands&quot;&gt;Cocos (Keeling) Islands&lt;/option&gt;
                &lt;option value=&quot;Colombia&quot;&gt;Colombia&lt;/option&gt;
                &lt;option value=&quot;Comoros&quot;&gt;Comoros&lt;/option&gt;
                &lt;option value=&quot;Congo&quot;&gt;Congo&lt;/option&gt;
                &lt;option value=&quot;Congo, the Democratic Republic of the&quot;&gt;Congo, the Democratic Republic of the&lt;/option&gt;
                &lt;option value=&quot;Cook Islands&quot;&gt;Cook Islands&lt;/option&gt;
                &lt;option value=&quot;Costa Rica&quot;&gt;Costa Rica&lt;/option&gt;
                &lt;option value=&quot;Cote d'Ivoire&quot;&gt;Cote d'Ivoire&lt;/option&gt;
                &lt;option value=&quot;Croatia (Hrvatska)&quot;&gt;Croatia (Hrvatska)&lt;/option&gt;
                &lt;option value=&quot;Cuba&quot;&gt;Cuba&lt;/option&gt;
                &lt;option value=&quot;Cyprus&quot;&gt;Cyprus&lt;/option&gt;
                &lt;option value=&quot;Czech Republic&quot;&gt;Czech Republic&lt;/option&gt;
                &lt;option value=&quot;Denmark&quot;&gt;Denmark&lt;/option&gt;
                &lt;option value=&quot;Djibouti&quot;&gt;Djibouti&lt;/option&gt;
                &lt;option value=&quot;Dominica&quot;&gt;Dominica&lt;/option&gt;
                &lt;option value=&quot;Dominican Republic&quot;&gt;Dominican Republic&lt;/option&gt;
                &lt;option value=&quot;East Timor&quot;&gt;East Timor&lt;/option&gt;
                &lt;option value=&quot;Ecuador&quot;&gt;Ecuador&lt;/option&gt;
                &lt;option value=&quot;Egypt&quot;&gt;Egypt&lt;/option&gt;
                &lt;option value=&quot;El Salvador&quot;&gt;El Salvador&lt;/option&gt;
                &lt;option value=&quot;Equatorial Guinea&quot;&gt;Equatorial Guinea&lt;/option&gt;
                &lt;option value=&quot;Eritrea&quot;&gt;Eritrea&lt;/option&gt;
                &lt;option value=&quot;Estonia&quot;&gt;Estonia&lt;/option&gt;
                &lt;option value=&quot;Ethiopia&quot;&gt;Ethiopia&lt;/option&gt;
                &lt;option value=&quot;Falkland Islands (Malvinas)&quot;&gt;Falkland Islands (Malvinas)&lt;/option&gt;
                &lt;option value=&quot;Faroe Islands&quot;&gt;Faroe Islands&lt;/option&gt;
                &lt;option value=&quot;Fiji&quot;&gt;Fiji&lt;/option&gt;
                &lt;option value=&quot;Finland&quot;&gt;Finland&lt;/option&gt;
                &lt;option value=&quot;France&quot;&gt;France&lt;/option&gt;
                &lt;option value=&quot;France Metropolitan&quot;&gt;France Metropolitan&lt;/option&gt;
                &lt;option value=&quot;French Guiana&quot;&gt;French Guiana&lt;/option&gt;
                &lt;option value=&quot;French Polynesia&quot;&gt;French Polynesia&lt;/option&gt;
                &lt;option value=&quot;French Southern Territories&quot;&gt;French Southern Territories&lt;/option&gt;
                &lt;option value=&quot;Gabon&quot;&gt;Gabon&lt;/option&gt;
                &lt;option value=&quot;Gambia&quot;&gt;Gambia&lt;/option&gt;
                &lt;option value=&quot;Georgia&quot;&gt;Georgia&lt;/option&gt;
                &lt;option value=&quot;Germany&quot;&gt;Germany&lt;/option&gt;
                &lt;option value=&quot;Ghana&quot;&gt;Ghana&lt;/option&gt;
                &lt;option value=&quot;Gibraltar&quot;&gt;Gibraltar&lt;/option&gt;
                &lt;option value=&quot;Greece&quot;&gt;Greece&lt;/option&gt;
                &lt;option value=&quot;Greenland&quot;&gt;Greenland&lt;/option&gt;
                &lt;option value=&quot;Grenada&quot;&gt;Grenada&lt;/option&gt;
                &lt;option value=&quot;Guadeloupe&quot;&gt;Guadeloupe&lt;/option&gt;
                &lt;option value=&quot;Guam&quot;&gt;Guam&lt;/option&gt;
                &lt;option value=&quot;Guatemala&quot;&gt;Guatemala&lt;/option&gt;
                &lt;option value=&quot;Guinea&quot;&gt;Guinea&lt;/option&gt;
                &lt;option value=&quot;Guinea-Bissau&quot;&gt;Guinea-Bissau&lt;/option&gt;
                &lt;option value=&quot;Guyana&quot;&gt;Guyana&lt;/option&gt;
                &lt;option value=&quot;Haiti&quot;&gt;Haiti&lt;/option&gt;
                &lt;option value=&quot;Heard and Mc Donald Islands&quot;&gt;Heard and Mc Donald Islands&lt;/option&gt;
                &lt;option value=&quot;Holy See (Vatican City State)&quot;&gt;Holy See (Vatican City State)&lt;/option&gt;
                &lt;option value=&quot;Honduras&quot;&gt;Honduras&lt;/option&gt;
                &lt;option value=&quot;Hong Kong&quot;&gt;Hong Kong&lt;/option&gt;
                &lt;option value=&quot;Hungary&quot;&gt;Hungary&lt;/option&gt;
                &lt;option value=&quot;Iceland&quot;&gt;Iceland&lt;/option&gt;
                &lt;option value=&quot;India&quot;&gt;India&lt;/option&gt;
                &lt;option value=&quot;Indonesia&quot;&gt;Indonesia&lt;/option&gt;
                &lt;option value=&quot;Iran (Islamic Republic of)&quot;&gt;Iran (Islamic Republic of)&lt;/option&gt;
                &lt;option value=&quot;Iraq&quot;&gt;Iraq&lt;/option&gt;
                &lt;option value=&quot;Ireland&quot;&gt;Ireland&lt;/option&gt;
                &lt;option value=&quot;Israel&quot;&gt;Israel&lt;/option&gt;
                &lt;option value=&quot;Italy&quot;&gt;Italy&lt;/option&gt;
                &lt;option value=&quot;Jamaica&quot;&gt;Jamaica&lt;/option&gt;
                &lt;option value=&quot;Japan&quot;&gt;Japan&lt;/option&gt;
                &lt;option value=&quot;Jordan&quot;&gt;Jordan&lt;/option&gt;
                &lt;option value=&quot;Kazakhstan&quot;&gt;Kazakhstan&lt;/option&gt;
                &lt;option value=&quot;Kenya&quot;&gt;Kenya&lt;/option&gt;
                &lt;option value=&quot;Kiribati&quot;&gt;Kiribati&lt;/option&gt;
                &lt;option value=&quot;Korea, Democratic People's Republic of&quot;&gt;Korea, Democratic People's Republic of&lt;/option&gt;
                &lt;option value=&quot;Korea, Republic of&quot;&gt;Korea, Republic of&lt;/option&gt;
                &lt;option value=&quot;Kuwait&quot;&gt;Kuwait&lt;/option&gt;
                &lt;option value=&quot;Kyrgyzstan&quot;&gt;Kyrgyzstan&lt;/option&gt;
                &lt;option value=&quot;Lao, People's Democratic Republic&quot;&gt;Lao, People's Democratic Republic&lt;/option&gt;
                &lt;option value=&quot;Latvia&quot;&gt;Latvia&lt;/option&gt;
                &lt;option value=&quot;Lebanon&quot;&gt;Lebanon&lt;/option&gt;
                &lt;option value=&quot;Lesotho&quot;&gt;Lesotho&lt;/option&gt;
                &lt;option value=&quot;Liberia&quot;&gt;Liberia&lt;/option&gt;
                &lt;option value=&quot;Libyan Arab Jamahiriya&quot;&gt;Libyan Arab Jamahiriya&lt;/option&gt;
                &lt;option value=&quot;Liechtenstein&quot;&gt;Liechtenstein&lt;/option&gt;
                &lt;option value=&quot;Lithuania&quot;&gt;Lithuania&lt;/option&gt;
                &lt;option value=&quot;Luxembourg&quot;&gt;Luxembourg&lt;/option&gt;
                &lt;option value=&quot;Macau&quot;&gt;Macau&lt;/option&gt;
                &lt;option value=&quot;Macedonia, The Former Yugoslav Republic of&quot;&gt;Macedonia, The Former Yugoslav Republic of&lt;/option&gt;
                &lt;option value=&quot;Madagascar&quot;&gt;Madagascar&lt;/option&gt;
                &lt;option value=&quot;Malawi&quot;&gt;Malawi&lt;/option&gt;
                &lt;option value=&quot;Malaysia&quot;&gt;Malaysia&lt;/option&gt;
                &lt;option value=&quot;Maldives&quot;&gt;Maldives&lt;/option&gt;
                &lt;option value=&quot;Mali&quot;&gt;Mali&lt;/option&gt;
                &lt;option value=&quot;Malta&quot;&gt;Malta&lt;/option&gt;
                &lt;option value=&quot;Marshall Islands&quot;&gt;Marshall Islands&lt;/option&gt;
                &lt;option value=&quot;Martinique&quot;&gt;Martinique&lt;/option&gt;
                &lt;option value=&quot;Mauritania&quot;&gt;Mauritania&lt;/option&gt;
                &lt;option value=&quot;Mauritius&quot;&gt;Mauritius&lt;/option&gt;
                &lt;option value=&quot;Mayotte&quot;&gt;Mayotte&lt;/option&gt;
                &lt;option value=&quot;Mexico&quot;&gt;Mexico&lt;/option&gt;
                &lt;option value=&quot;Micronesia, Federated States of&quot;&gt;Micronesia, Federated States of&lt;/option&gt;
                &lt;option value=&quot;Moldova, Republic of&quot;&gt;Moldova, Republic of&lt;/option&gt;
                &lt;option value=&quot;Monaco&quot;&gt;Monaco&lt;/option&gt;
                &lt;option value=&quot;Mongolia&quot;&gt;Mongolia&lt;/option&gt;
                &lt;option value=&quot;Montserrat&quot;&gt;Montserrat&lt;/option&gt;
                &lt;option value=&quot;Morocco&quot;&gt;Morocco&lt;/option&gt;
                &lt;option value=&quot;Mozambique&quot;&gt;Mozambique&lt;/option&gt;
                &lt;option value=&quot;Myanmar&quot;&gt;Myanmar&lt;/option&gt;
                &lt;option value=&quot;Namibia&quot;&gt;Namibia&lt;/option&gt;
                &lt;option value=&quot;Nauru&quot;&gt;Nauru&lt;/option&gt;
                &lt;option value=&quot;Nepal&quot;&gt;Nepal&lt;/option&gt;
                &lt;option value=&quot;Netherlands&quot;&gt;Netherlands&lt;/option&gt;
                &lt;option value=&quot;Netherlands Antilles&quot;&gt;Netherlands Antilles&lt;/option&gt;
                &lt;option value=&quot;New Caledonia&quot;&gt;New Caledonia&lt;/option&gt;
                &lt;option value=&quot;New Zealand&quot;&gt;New Zealand&lt;/option&gt;
                &lt;option value=&quot;Nicaragua&quot;&gt;Nicaragua&lt;/option&gt;
                &lt;option value=&quot;Niger&quot;&gt;Niger&lt;/option&gt;
                &lt;option value=&quot;Nigeria&quot;&gt;Nigeria&lt;/option&gt;
                &lt;option value=&quot;Niue&quot;&gt;Niue&lt;/option&gt;
                &lt;option value=&quot;Norfolk Island&quot;&gt;Norfolk Island&lt;/option&gt;
                &lt;option value=&quot;Northern Mariana Islands&quot;&gt;Northern Mariana Islands&lt;/option&gt;
                &lt;option value=&quot;Norway&quot;&gt;Norway&lt;/option&gt;
                &lt;option value=&quot;Oman&quot;&gt;Oman&lt;/option&gt;
                &lt;option value=&quot;Pakistan&quot;&gt;Pakistan&lt;/option&gt;
                &lt;option value=&quot;Palau&quot;&gt;Palau&lt;/option&gt;
                &lt;option value=&quot;Panama&quot;&gt;Panama&lt;/option&gt;
                &lt;option value=&quot;Papua New Guinea&quot;&gt;Papua New Guinea&lt;/option&gt;
                &lt;option value=&quot;Paraguay&quot;&gt;Paraguay&lt;/option&gt;
                &lt;option value=&quot;Peru&quot;&gt;Peru&lt;/option&gt;
                &lt;option value=&quot;Philippines&quot;&gt;Philippines&lt;/option&gt;
                &lt;option value=&quot;Pitcairn&quot;&gt;Pitcairn&lt;/option&gt;
                &lt;option value=&quot;Poland&quot;&gt;Poland&lt;/option&gt;
                &lt;option value=&quot;Portugal&quot;&gt;Portugal&lt;/option&gt;
                &lt;option value=&quot;Puerto Rico&quot;&gt;Puerto Rico&lt;/option&gt;
                &lt;option value=&quot;Qatar&quot;&gt;Qatar&lt;/option&gt;
                &lt;option value=&quot;Reunion&quot;&gt;Reunion&lt;/option&gt;
                &lt;option value=&quot;Romania&quot;&gt;Romania&lt;/option&gt;
                &lt;option value=&quot;Russian Federation&quot;&gt;Russian Federation&lt;/option&gt;
                &lt;option value=&quot;Rwanda&quot;&gt;Rwanda&lt;/option&gt;
                &lt;option value=&quot;Saint Kitts and Nevis&quot;&gt;Saint Kitts and Nevis&lt;/option&gt;
                &lt;option value=&quot;Saint Lucia&quot;&gt;Saint Lucia&lt;/option&gt;
                &lt;option value=&quot;Saint Vincent and the Grenadines&quot;&gt;Saint Vincent and the Grenadines&lt;/option&gt;
                &lt;option value=&quot;Samoa&quot;&gt;Samoa&lt;/option&gt;
                &lt;option value=&quot;San Marino&quot;&gt;San Marino&lt;/option&gt;
                &lt;option value=&quot;Sao Tome and Principe&quot;&gt;Sao Tome and Principe&lt;/option&gt;
                &lt;option value=&quot;Saudi Arabia&quot;&gt;Saudi Arabia&lt;/option&gt;
                &lt;option value=&quot;Senegal&quot;&gt;Senegal&lt;/option&gt;
                &lt;option value=&quot;Seychelles&quot;&gt;Seychelles&lt;/option&gt;
                &lt;option value=&quot;Sierra Leone&quot;&gt;Sierra Leone&lt;/option&gt;
                &lt;option value=&quot;Singapore&quot;&gt;Singapore&lt;/option&gt;
                &lt;option value=&quot;Slovakia (Slovak Republic)&quot;&gt;Slovakia (Slovak Republic)&lt;/option&gt;
                &lt;option value=&quot;Slovenia&quot;&gt;Slovenia&lt;/option&gt;
                &lt;option value=&quot;Solomon Islands&quot;&gt;Solomon Islands&lt;/option&gt;
                &lt;option value=&quot;Somalia&quot;&gt;Somalia&lt;/option&gt;
                &lt;option value=&quot;South Africa&quot;&gt;South Africa&lt;/option&gt;
                &lt;option value=&quot;South Georgia and the South Sandwich Islands&quot;&gt;South Georgia and the South Sandwich Islands&lt;/option&gt;
                &lt;option value=&quot;Spain&quot;&gt;Spain&lt;/option&gt;
                &lt;option value=&quot;Sri Lanka&quot;&gt;Sri Lanka&lt;/option&gt;
                &lt;option value=&quot;St. Helena&quot;&gt;St. Helena&lt;/option&gt;
                &lt;option value=&quot;St. Pierre and Miquelon&quot;&gt;St. Pierre and Miquelon&lt;/option&gt;
                &lt;option value=&quot;Sudan&quot;&gt;Sudan&lt;/option&gt;
                &lt;option value=&quot;Suriname&quot;&gt;Suriname&lt;/option&gt;
                &lt;option value=&quot;Svalbard and Jan Mayen Islands&quot;&gt;Svalbard and Jan Mayen Islands&lt;/option&gt;
                &lt;option value=&quot;Swaziland&quot;&gt;Swaziland&lt;/option&gt;
                &lt;option value=&quot;Sweden&quot;&gt;Sweden&lt;/option&gt;
                &lt;option value=&quot;Switzerland&quot;&gt;Switzerland&lt;/option&gt;
                &lt;option value=&quot;Syrian Arab Republic&quot;&gt;Syrian Arab Republic&lt;/option&gt;
                &lt;option value=&quot;Taiwan, Province of China&quot;&gt;Taiwan, Province of China&lt;/option&gt;
                &lt;option value=&quot;Tajikistan&quot;&gt;Tajikistan&lt;/option&gt;
                &lt;option value=&quot;Tanzania, United Republic of&quot;&gt;Tanzania, United Republic of&lt;/option&gt;
                &lt;option value=&quot;Thailand&quot;&gt;Thailand&lt;/option&gt;
                &lt;option value=&quot;Togo&quot;&gt;Togo&lt;/option&gt;
                &lt;option value=&quot;Tokelau&quot;&gt;Tokelau&lt;/option&gt;
                &lt;option value=&quot;Tonga&quot;&gt;Tonga&lt;/option&gt;
                &lt;option value=&quot;Trinidad and Tobago&quot;&gt;Trinidad and Tobago&lt;/option&gt;
                &lt;option value=&quot;Tunisia&quot;&gt;Tunisia&lt;/option&gt;
                &lt;option value=&quot;Turkey&quot;&gt;Turkey&lt;/option&gt;
                &lt;option value=&quot;Turkmenistan&quot;&gt;Turkmenistan&lt;/option&gt;
                &lt;option value=&quot;Turks and Caicos Islands&quot;&gt;Turks and Caicos Islands&lt;/option&gt;
                &lt;option value=&quot;Tuvalu&quot;&gt;Tuvalu&lt;/option&gt;
                &lt;option value=&quot;Uganda&quot;&gt;Uganda&lt;/option&gt;
                &lt;option value=&quot;Ukraine&quot;&gt;Ukraine&lt;/option&gt;
                &lt;option value=&quot;United Arab Emirates&quot;&gt;United Arab Emirates&lt;/option&gt;
                &lt;option value=&quot;United Kingdom&quot;&gt;United Kingdom&lt;/option&gt;
                &lt;option value=&quot;United States&quot;&gt;United States&lt;/option&gt;
                &lt;option value=&quot;United States Minor Outlying Islands&quot;&gt;United States Minor Outlying Islands&lt;/option&gt;
                &lt;option value=&quot;Uruguay&quot;&gt;Uruguay&lt;/option&gt;
                &lt;option value=&quot;Uzbekistan&quot;&gt;Uzbekistan&lt;/option&gt;
                &lt;option value=&quot;Vanuatu&quot;&gt;Vanuatu&lt;/option&gt;
                &lt;option value=&quot;Venezuela&quot;&gt;Venezuela&lt;/option&gt;
                &lt;option value=&quot;Vietnam&quot;&gt;Vietnam&lt;/option&gt;
                &lt;option value=&quot;Virgin Islands (British)&quot;&gt;Virgin Islands (British)&lt;/option&gt;
                &lt;option value=&quot;Virgin Islands (U.S.)&quot;&gt;Virgin Islands (U.S.)&lt;/option&gt;
                &lt;option value=&quot;Wallis and Futuna Islands&quot;&gt;Wallis and Futuna Islands&lt;/option&gt;
                &lt;option value=&quot;Western Sahara&quot;&gt;Western Sahara&lt;/option&gt;
                &lt;option value=&quot;Yemen&quot;&gt;Yemen&lt;/option&gt;
                &lt;option value=&quot;Yugoslavia&quot;&gt;Yugoslavia&lt;/option&gt;
                &lt;option value=&quot;Zambia&quot;&gt;Zambia&lt;/option&gt;
                &lt;option value=&quot;Zimbabwe&quot;&gt;Zimbabwe&lt;/option&gt;
              &lt;/select&gt;&lt;/div&gt;
            &lt;div class=&quot;col-6&quot;&gt;&lt;label class=&quot;form-label&quot; for=&quot;bootstrap-wizard-card-holder-zip-code&quot;&gt;Zip&lt;/label&gt;&lt;input class=&quot;form-control&quot; placeholder=&quot;1234&quot; name=&quot;zipCode&quot; type=&quot;text&quot; id=&quot;bootstrap-wizard-card-holder-zip-code&quot; /&gt;&lt;/div&gt;
            &lt;div class=&quot;col-6&quot;&gt;&lt;label class=&quot;form-label&quot; for=&quot;bootstrap-wizard-card-exp-date&quot;&gt;Date of Expire&lt;/label&gt;&lt;input class=&quot;form-control&quot; placeholder=&quot;15/2024&quot; name=&quot;expDate&quot; type=&quot;text&quot; id=&quot;bootstrap-wizard-card-exp-date&quot; /&gt;&lt;/div&gt;
            &lt;div class=&quot;col-6&quot;&gt;&lt;label class=&quot;form-label&quot; for=&quot;bootstrap-wizard-card-cvv&quot;&gt;CVV&lt;/label&gt;&lt;input class=&quot;form-control&quot; placeholder=&quot;123&quot; name=&quot;cvv&quot; maxlength=&quot;3&quot; pattern=&quot;[0-9]{3}&quot; type=&quot;number&quot; id=&quot;bootstrap-wizard-card-cvv&quot; /&gt;&lt;/div&gt;
          &lt;/div&gt;
        &lt;/form&gt;
      &lt;/div&gt;
      &lt;div class=&quot;tab-pane&quot; role=&quot;tabpanel&quot; aria-labelledby=&quot;bootstrap-wizard-tab4&quot; id=&quot;bootstrap-wizard-tab4&quot;&gt;
        &lt;div class=&quot;row flex-center pb-8 pt-4 gx-3 gy-4&quot;&gt;
          &lt;div class=&quot;col-12 col-sm-auto&quot;&gt;
            &lt;div class=&quot;text-center text-sm-start&quot;&gt;&lt;img class=&quot;d-dark-none&quot; src=&quot;../../assets/img/spot-illustrations/38.webp&quot; alt=&quot;&quot; width=&quot;220&quot; /&gt;&lt;img class=&quot;d-light-none&quot; src=&quot;../../assets/img/spot-illustrations/dark_38.webp&quot; alt=&quot;&quot; width=&quot;220&quot; /&gt;&lt;/div&gt;
          &lt;/div&gt;
          &lt;div class=&quot;col-12 col-sm-auto&quot;&gt;
            &lt;div class=&quot;text-center text-sm-start&quot;&gt;
              &lt;h5 class=&quot;mb-3&quot;&gt;You are all set!&lt;/h5&gt;
              &lt;p class=&quot;text-body-emphasis fs-9&quot;&gt;Now you can access your account&lt;br /&gt;anytime anywhere&lt;/p&gt;&lt;a class=&quot;btn btn-primary px-6&quot; href=&quot;../../modules/forms/wizard.html&quot;&gt;Start Over&lt;/a&gt;
            &lt;/div&gt;
          &lt;/div&gt;
        &lt;/div&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class=&quot;card-footer border-top-0&quot; data-wizard-footer=&quot;data-wizard-footer&quot;&gt;
    &lt;div class=&quot;d-flex pager wizard list-inline mb-0&quot;&gt;&lt;button class=&quot;d-none btn btn-link ps-0&quot; type=&quot;button&quot; data-wizard-prev-btn=&quot;data-wizard-prev-btn&quot;&gt;&lt;span class=&quot;fas fa-chevron-left me-1&quot; data-fa-transform=&quot;shrink-3&quot;&gt;&lt;/span&gt;Previous&lt;/button&gt;
      &lt;div class=&quot;flex-1 text-end&quot;&gt;&lt;button class=&quot;btn btn-primary px-6 px-sm-6&quot; type=&quot;submit&quot; data-wizard-next-btn=&quot;data-wizard-next-btn&quot;&gt;Next&lt;span class=&quot;fas fa-chevron-right ms-1&quot; data-fa-transform=&quot;shrink-3&quot;&gt; &lt;/span&gt;&lt;/button&gt;&lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
                </div>
                <div class="p-4 code-to-copy">
                    <div class="card theme-wizard mb-5" data-theme-wizard="data-theme-wizard">
                        <div class="card-header bg-body-highlight pt-3 pb-2 border-bottom-0">
                            <ul class="nav justify-content-between nav-wizard">
                                <li class="nav-item"><a class="nav-link active fw-semibold" href="#bootstrap-wizard-tab1" data-bs-toggle="tab" data-wizard-step="1">
                                        <div class="text-center d-inline-block"><span class="nav-item-circle-parent"><span class="nav-item-circle"><span class="fas fa-lock"></span></span></span><span class="d-none d-md-block mt-1 fs-9">Account</span></div>
                                    </a></li>
                                <li class="nav-item"><a class="nav-link fw-semibold" href="#bootstrap-wizard-tab2" data-bs-toggle="tab" data-wizard-step="2">
                                        <div class="text-center d-inline-block"><span class="nav-item-circle-parent"><span class="nav-item-circle"><span class="fas fa-user"></span></span></span><span class="d-none d-md-block mt-1 fs-9">Personal</span></div>
                                    </a></li>
                                <li class="nav-item"><a class="nav-link fw-semibold" href="#bootstrap-wizard-tab3" data-bs-toggle="tab" data-wizard-step="3">
                                        <div class="text-center d-inline-block"><span class="nav-item-circle-parent"><span class="nav-item-circle"><span class="fas fa-file-alt"></span></span></span><span class="d-none d-md-block mt-1 fs-9">Billing</span></div>
                                    </a></li>
                                <li class="nav-item"><a class="nav-link fw-semibold" href="#bootstrap-wizard-tab4" data-bs-toggle="tab" data-wizard-step="4">
                                        <div class="text-center d-inline-block"><span class="nav-item-circle-parent"><span class="nav-item-circle"><span class="fas fa-check"></span></span></span><span class="d-none d-md-block mt-1 fs-9">Done</span></div>
                                    </a></li>
                            </ul>
                        </div>
                        <div class="card-body pt-4 pb-0">
                            <div class="tab-content">
                                <div class="tab-pane active" role="tabpanel" aria-labelledby="bootstrap-wizard-tab1" id="bootstrap-wizard-tab1">
                                    <form id="wizardForm1" novalidate="novalidate" data-wizard-form="1">
                                        <div class="mb-2"><label class="form-label text-body" for="bootstrap-wizard-wizard-name">Name</label><input class="form-control" type="text" name="name" placeholder="John Smith" id="bootstrap-wizard-wizard-name" /></div>
                                        <div class="mb-2"><label class="form-label" for="bootstrap-wizard-wizard-email">Email*</label><input class="form-control" type="email" name="email" placeholder="Email address" pattern="^([a-zA-Z0-9_.-])+@(([a-zA-Z0-9-])+.)+([a-zA-Z0-9]{2,4})+$" id="bootstrap-wizard-wizard-email" /></div>
                                        <div class="row g-3 mb-3">
                                            <div class="col-sm-6">
                                                <div class="mb-2 mb-sm-0"><label class="form-label text-body" for="bootstrap-wizard-wizard-password">Password*</label><input class="form-control" type="password" name="password" placeholder="Password" id="bootstrap-wizard-wizard-password" data-wizard-password="true" /></div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="mb-2"><label class="form-label text-body" for="bootstrap-wizard-wizard-confirm-password">Confirm Password*</label><input class="form-control" type="password" name="confirmPassword" placeholder="Confirm Password" id="bootstrap-wizard-wizard-confirm-password" data-wizard-confirm-password="true" /></div>
                                            </div>
                                        </div>
                                        <div class="form-check"><input class="form-check-input" type="checkbox" name="terms" checked="checked" id="bootstrap-wizard-wizard-checkbox" /><label class="form-check-label text-body" for="bootstrap-wizard-wizard-checkbox">I accept the <a href="#!">terms </a>and <a href="#!">privacy policy</a></label></div>
                                    </form>
                                </div>
                                <div class="tab-pane" role="tabpanel" aria-labelledby="bootstrap-wizard-tab2" id="bootstrap-wizard-tab2">
                                    <form id="wizardForm2" novalidate="novalidate" data-wizard-form="2">
                                        <div class="row g-4 mb-4" data-dropzone="data-dropzone" data-options='{"maxFiles":1,"data":[{"name":"avatar.webp","size":"54kb","url":"{{asset('assets/img/team')}}"}]}'>
                                            <div class="fallback"><input type="file" name="file" /></div>
                                            <div class="col-md-auto">
                                                <div class="dz-preview dz-preview-single">
                                                    <div class="dz-preview-cover d-flex align-items-center justify-content-center mb-2 mb-md-0">
                                                        <div class="avatar avatar-4xl"><img class="rounded-circle avatar-placeholder" src="{{asset('assets/img/team/avatar.webp')}}" alt="..." data-dz-thumbnail="data-dz-thumbnail" /></div>
                                                        <div class="dz-progress"><span class="dz-upload" data-dz-uploadprogress=""></span></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md">
                                                <div class="dz-message dropzone-area px-2 py-3" data-dz-message="data-dz-message">
                                                    <div class="text-center text-body-emphasis">
                                                        <h5 class="mb-2"><span class="fa-solid fa-upload me-2"></span>Upload Profile Picture</h5>
                                                        <p class="mb-0 fs-9 text-body-tertiary text-opacity-85 lh-sm">Upload a 300x300 jpg image with <br />a maximum size of 400KB</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-2"><label class="form-label" for="bootstrap-wizard-gender">Gender</label><select class="form-select" name="gender" id="bootstrap-wizard-gender">
                                                <option value="">Select your gender ...</option>
                                                <option value="Male">Male</option>
                                                <option value="Female">Female</option>
                                                <option value="Other">Other</option>
                                            </select></div>
                                        <div class="mb-2"><label class="form-label" for="bootstrap-wizard-wizard-phone">Phone</label><input class="form-control" type="text" name="phone" placeholder="Phone" id="bootstrap-wizard-wizard-phone" /></div>
                                        <div class="mb-2"><label class="form-label" for="bootstrap-wizard-wizard-datepicker">Date of Birth</label><input class="form-control datetimepicker" type="text" placeholder="d/m/y" data-options='{"dateFormat":"d/m/y","disableMobile":true}' id="bootstrap-wizard-wizard-datepicker" /></div>
                                        <div class="mb-2"><label class="form-label" for="bootstrap-wizard-wizard-address">Address</label><textarea class="form-control" rows="4" id="bootstrap-wizard-wizard-address"></textarea></div>
                                    </form>
                                </div>
                                <div class="tab-pane" role="tabpanel" aria-labelledby="bootstrap-wizard-tab3" id="bootstrap-wizard-tab3">
                                    <form class="mb-2" id="wizardForm3" novalidate="novalidate" data-wizard-form="3">
                                        <div class="row gx-3 gy-2">
                                            <div class="col-6"><label class="form-label" for="bootstrap-wizard-card-number">Card Number</label><input class="form-control" placeholder="XXXX XXXX XXXX XXXX" type="text" id="bootstrap-wizard-card-number" /></div>
                                            <div class="col-6"><label class="form-label" for="bootstrap-wizard-card-name">Name</label><input class="form-control" placeholder="John Doe" name="cardName" type="text" id="bootstrap-wizard-card-name" /></div>
                                            <div class="col-6"><label class="form-label" for="bootstrap-wizard-card-holder-country">Country</label><select class="form-select" name="customSelectCountry" id="bootstrap-wizard-card-holder-country">
                                                    <option value="">Select your country ...</option>
                                                    <option value="Afghanistan">Afghanistan</option>
                                                    <option value="Albania">Albania</option>
                                                    <option value="Algeria">Algeria</option>
                                                    <option value="American Samoa">American Samoa</option>
                                                    <option value="Andorra">Andorra</option>
                                                    <option value="Angola">Angola</option>
                                                    <option value="Anguilla">Anguilla</option>
                                                    <option value="Antarctica">Antarctica</option>
                                                    <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                                    <option value="Argentina">Argentina</option>
                                                    <option value="Armenia">Armenia</option>
                                                    <option value="Aruba">Aruba</option>
                                                    <option value="Australia">Australia</option>
                                                    <option value="Austria">Austria</option>
                                                    <option value="Azerbaijan">Azerbaijan</option>
                                                    <option value="Bahamas">Bahamas</option>
                                                    <option value="Bahrain">Bahrain</option>
                                                    <option value="Bangladesh">Bangladesh</option>
                                                    <option value="Barbados">Barbados</option>
                                                    <option value="Belarus">Belarus</option>
                                                    <option value="Belgium">Belgium</option>
                                                    <option value="Belize">Belize</option>
                                                    <option value="Benin">Benin</option>
                                                    <option value="Bermuda">Bermuda</option>
                                                    <option value="Bhutan">Bhutan</option>
                                                    <option value="Bolivia">Bolivia</option>
                                                    <option value="Bosnia and Herzegowina">Bosnia and Herzegowina</option>
                                                    <option value="Botswana">Botswana</option>
                                                    <option value="Bouvet Island">Bouvet Island</option>
                                                    <option value="Brazil">Brazil</option>
                                                    <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                                                    <option value="Brunei Darussalam">Brunei Darussalam</option>
                                                    <option value="Bulgaria">Bulgaria</option>
                                                    <option value="Burkina Faso">Burkina Faso</option>
                                                    <option value="Burundi">Burundi</option>
                                                    <option value="Cambodia">Cambodia</option>
                                                    <option value="Cameroon">Cameroon</option>
                                                    <option value="Canada">Canada</option>
                                                    <option value="Cape Verde">Cape Verde</option>
                                                    <option value="Cayman Islands">Cayman Islands</option>
                                                    <option value="Central African Republic">Central African Republic</option>
                                                    <option value="Chad">Chad</option>
                                                    <option value="Chile">Chile</option>
                                                    <option value="China">China</option>
                                                    <option value="Christmas Island">Christmas Island</option>
                                                    <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                                                    <option value="Colombia">Colombia</option>
                                                    <option value="Comoros">Comoros</option>
                                                    <option value="Congo">Congo</option>
                                                    <option value="Congo, the Democratic Republic of the">Congo, the Democratic Republic of the</option>
                                                    <option value="Cook Islands">Cook Islands</option>
                                                    <option value="Costa Rica">Costa Rica</option>
                                                    <option value="Cote d'Ivoire">Cote d'Ivoire</option>
                                                    <option value="Croatia (Hrvatska)">Croatia (Hrvatska)</option>
                                                    <option value="Cuba">Cuba</option>
                                                    <option value="Cyprus">Cyprus</option>
                                                    <option value="Czech Republic">Czech Republic</option>
                                                    <option value="Denmark">Denmark</option>
                                                    <option value="Djibouti">Djibouti</option>
                                                    <option value="Dominica">Dominica</option>
                                                    <option value="Dominican Republic">Dominican Republic</option>
                                                    <option value="East Timor">East Timor</option>
                                                    <option value="Ecuador">Ecuador</option>
                                                    <option value="Egypt">Egypt</option>
                                                    <option value="El Salvador">El Salvador</option>
                                                    <option value="Equatorial Guinea">Equatorial Guinea</option>
                                                    <option value="Eritrea">Eritrea</option>
                                                    <option value="Estonia">Estonia</option>
                                                    <option value="Ethiopia">Ethiopia</option>
                                                    <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                                                    <option value="Faroe Islands">Faroe Islands</option>
                                                    <option value="Fiji">Fiji</option>
                                                    <option value="Finland">Finland</option>
                                                    <option value="France">France</option>
                                                    <option value="France Metropolitan">France Metropolitan</option>
                                                    <option value="French Guiana">French Guiana</option>
                                                    <option value="French Polynesia">French Polynesia</option>
                                                    <option value="French Southern Territories">French Southern Territories</option>
                                                    <option value="Gabon">Gabon</option>
                                                    <option value="Gambia">Gambia</option>
                                                    <option value="Georgia">Georgia</option>
                                                    <option value="Germany">Germany</option>
                                                    <option value="Ghana">Ghana</option>
                                                    <option value="Gibraltar">Gibraltar</option>
                                                    <option value="Greece">Greece</option>
                                                    <option value="Greenland">Greenland</option>
                                                    <option value="Grenada">Grenada</option>
                                                    <option value="Guadeloupe">Guadeloupe</option>
                                                    <option value="Guam">Guam</option>
                                                    <option value="Guatemala">Guatemala</option>
                                                    <option value="Guinea">Guinea</option>
                                                    <option value="Guinea-Bissau">Guinea-Bissau</option>
                                                    <option value="Guyana">Guyana</option>
                                                    <option value="Haiti">Haiti</option>
                                                    <option value="Heard and Mc Donald Islands">Heard and Mc Donald Islands</option>
                                                    <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                                                    <option value="Honduras">Honduras</option>
                                                    <option value="Hong Kong">Hong Kong</option>
                                                    <option value="Hungary">Hungary</option>
                                                    <option value="Iceland">Iceland</option>
                                                    <option value="India">India</option>
                                                    <option value="Indonesia">Indonesia</option>
                                                    <option value="Iran (Islamic Republic of)">Iran (Islamic Republic of)</option>
                                                    <option value="Iraq">Iraq</option>
                                                    <option value="Ireland">Ireland</option>
                                                    <option value="Israel">Israel</option>
                                                    <option value="Italy">Italy</option>
                                                    <option value="Jamaica">Jamaica</option>
                                                    <option value="Japan">Japan</option>
                                                    <option value="Jordan">Jordan</option>
                                                    <option value="Kazakhstan">Kazakhstan</option>
                                                    <option value="Kenya">Kenya</option>
                                                    <option value="Kiribati">Kiribati</option>
                                                    <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
                                                    <option value="Korea, Republic of">Korea, Republic of</option>
                                                    <option value="Kuwait">Kuwait</option>
                                                    <option value="Kyrgyzstan">Kyrgyzstan</option>
                                                    <option value="Lao, People's Democratic Republic">Lao, People's Democratic Republic</option>
                                                    <option value="Latvia">Latvia</option>
                                                    <option value="Lebanon">Lebanon</option>
                                                    <option value="Lesotho">Lesotho</option>
                                                    <option value="Liberia">Liberia</option>
                                                    <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                                                    <option value="Liechtenstein">Liechtenstein</option>
                                                    <option value="Lithuania">Lithuania</option>
                                                    <option value="Luxembourg">Luxembourg</option>
                                                    <option value="Macau">Macau</option>
                                                    <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option>
                                                    <option value="Madagascar">Madagascar</option>
                                                    <option value="Malawi">Malawi</option>
                                                    <option value="Malaysia">Malaysia</option>
                                                    <option value="Maldives">Maldives</option>
                                                    <option value="Mali">Mali</option>
                                                    <option value="Malta">Malta</option>
                                                    <option value="Marshall Islands">Marshall Islands</option>
                                                    <option value="Martinique">Martinique</option>
                                                    <option value="Mauritania">Mauritania</option>
                                                    <option value="Mauritius">Mauritius</option>
                                                    <option value="Mayotte">Mayotte</option>
                                                    <option value="Mexico">Mexico</option>
                                                    <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
                                                    <option value="Moldova, Republic of">Moldova, Republic of</option>
                                                    <option value="Monaco">Monaco</option>
                                                    <option value="Mongolia">Mongolia</option>
                                                    <option value="Montserrat">Montserrat</option>
                                                    <option value="Morocco">Morocco</option>
                                                    <option value="Mozambique">Mozambique</option>
                                                    <option value="Myanmar">Myanmar</option>
                                                    <option value="Namibia">Namibia</option>
                                                    <option value="Nauru">Nauru</option>
                                                    <option value="Nepal">Nepal</option>
                                                    <option value="Netherlands">Netherlands</option>
                                                    <option value="Netherlands Antilles">Netherlands Antilles</option>
                                                    <option value="New Caledonia">New Caledonia</option>
                                                    <option value="New Zealand">New Zealand</option>
                                                    <option value="Nicaragua">Nicaragua</option>
                                                    <option value="Niger">Niger</option>
                                                    <option value="Nigeria">Nigeria</option>
                                                    <option value="Niue">Niue</option>
                                                    <option value="Norfolk Island">Norfolk Island</option>
                                                    <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                                                    <option value="Norway">Norway</option>
                                                    <option value="Oman">Oman</option>
                                                    <option value="Pakistan">Pakistan</option>
                                                    <option value="Palau">Palau</option>
                                                    <option value="Panama">Panama</option>
                                                    <option value="Papua New Guinea">Papua New Guinea</option>
                                                    <option value="Paraguay">Paraguay</option>
                                                    <option value="Peru">Peru</option>
                                                    <option value="Philippines">Philippines</option>
                                                    <option value="Pitcairn">Pitcairn</option>
                                                    <option value="Poland">Poland</option>
                                                    <option value="Portugal">Portugal</option>
                                                    <option value="Puerto Rico">Puerto Rico</option>
                                                    <option value="Qatar">Qatar</option>
                                                    <option value="Reunion">Reunion</option>
                                                    <option value="Romania">Romania</option>
                                                    <option value="Russian Federation">Russian Federation</option>
                                                    <option value="Rwanda">Rwanda</option>
                                                    <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                                    <option value="Saint Lucia">Saint Lucia</option>
                                                    <option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
                                                    <option value="Samoa">Samoa</option>
                                                    <option value="San Marino">San Marino</option>
                                                    <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                                                    <option value="Saudi Arabia">Saudi Arabia</option>
                                                    <option value="Senegal">Senegal</option>
                                                    <option value="Seychelles">Seychelles</option>
                                                    <option value="Sierra Leone">Sierra Leone</option>
                                                    <option value="Singapore">Singapore</option>
                                                    <option value="Slovakia (Slovak Republic)">Slovakia (Slovak Republic)</option>
                                                    <option value="Slovenia">Slovenia</option>
                                                    <option value="Solomon Islands">Solomon Islands</option>
                                                    <option value="Somalia">Somalia</option>
                                                    <option value="South Africa">South Africa</option>
                                                    <option value="South Georgia and the South Sandwich Islands">South Georgia and the South Sandwich Islands</option>
                                                    <option value="Spain">Spain</option>
                                                    <option value="Sri Lanka">Sri Lanka</option>
                                                    <option value="St. Helena">St. Helena</option>
                                                    <option value="St. Pierre and Miquelon">St. Pierre and Miquelon</option>
                                                    <option value="Sudan">Sudan</option>
                                                    <option value="Suriname">Suriname</option>
                                                    <option value="Svalbard and Jan Mayen Islands">Svalbard and Jan Mayen Islands</option>
                                                    <option value="Swaziland">Swaziland</option>
                                                    <option value="Sweden">Sweden</option>
                                                    <option value="Switzerland">Switzerland</option>
                                                    <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                                                    <option value="Taiwan, Province of China">Taiwan, Province of China</option>
                                                    <option value="Tajikistan">Tajikistan</option>
                                                    <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
                                                    <option value="Thailand">Thailand</option>
                                                    <option value="Togo">Togo</option>
                                                    <option value="Tokelau">Tokelau</option>
                                                    <option value="Tonga">Tonga</option>
                                                    <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                                    <option value="Tunisia">Tunisia</option>
                                                    <option value="Turkey">Turkey</option>
                                                    <option value="Turkmenistan">Turkmenistan</option>
                                                    <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                                                    <option value="Tuvalu">Tuvalu</option>
                                                    <option value="Uganda">Uganda</option>
                                                    <option value="Ukraine">Ukraine</option>
                                                    <option value="United Arab Emirates">United Arab Emirates</option>
                                                    <option value="United Kingdom">United Kingdom</option>
                                                    <option value="United States">United States</option>
                                                    <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                                                    <option value="Uruguay">Uruguay</option>
                                                    <option value="Uzbekistan">Uzbekistan</option>
                                                    <option value="Vanuatu">Vanuatu</option>
                                                    <option value="Venezuela">Venezuela</option>
                                                    <option value="Vietnam">Vietnam</option>
                                                    <option value="Virgin Islands (British)">Virgin Islands (British)</option>
                                                    <option value="Virgin Islands (U.S.)">Virgin Islands (U.S.)</option>
                                                    <option value="Wallis and Futuna Islands">Wallis and Futuna Islands</option>
                                                    <option value="Western Sahara">Western Sahara</option>
                                                    <option value="Yemen">Yemen</option>
                                                    <option value="Yugoslavia">Yugoslavia</option>
                                                    <option value="Zambia">Zambia</option>
                                                    <option value="Zimbabwe">Zimbabwe</option>
                                                </select></div>
                                            <div class="col-6"><label class="form-label" for="bootstrap-wizard-card-holder-zip-code">Zip</label><input class="form-control" placeholder="1234" name="zipCode" type="text" id="bootstrap-wizard-card-holder-zip-code" /></div>
                                            <div class="col-6"><label class="form-label" for="bootstrap-wizard-card-exp-date">Date of Expire</label><input class="form-control" placeholder="15/2024" name="expDate" type="text" id="bootstrap-wizard-card-exp-date" /></div>
                                            <div class="col-6"><label class="form-label" for="bootstrap-wizard-card-cvv">CVV</label><input class="form-control" placeholder="123" name="cvv" maxlength="3" pattern="[0-9]{3}" type="number" id="bootstrap-wizard-card-cvv" /></div>
                                        </div>
                                    </form>
                                </div>
                                <div class="tab-pane" role="tabpanel" aria-labelledby="bootstrap-wizard-tab4" id="bootstrap-wizard-tab4">
                                    <div class="row flex-center pb-8 pt-4 gx-3 gy-4">
                                        <div class="col-12 col-sm-auto">
                                            <div class="text-center text-sm-start"><img class="d-dark-none" src="{{asset('assets/img/spot-illustrations/38.webp')}}" alt="" width="220" /><img class="d-light-none" src="../../assets/img/spot-illustrations/dark_38.webp" alt="" width="220" /></div>
                                        </div>
                                        <div class="col-12 col-sm-auto">
                                            <div class="text-center text-sm-start">
                                                <h5 class="mb-3">You are all set!</h5>
                                                <p class="text-body-emphasis fs-9">Now you can access your account<br />anytime anywhere</p><a class="btn btn-primary px-6" href="wizard.html">Start Over</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer border-top-0" data-wizard-footer="data-wizard-footer">
                            <div class="d-flex pager wizard list-inline mb-0"><button class="d-none btn btn-link ps-0" type="button" data-wizard-prev-btn="data-wizard-prev-btn"><span class="fas fa-chevron-left me-1" data-fa-transform="shrink-3"></span>Previous</button>
                                <div class="flex-1 text-end"><button class="btn btn-primary px-6 px-sm-6" type="submit" data-wizard-next-btn="data-wizard-next-btn">Next<span class="fas fa-chevron-right ms-1" data-fa-transform="shrink-3"> </span></button></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 col-xxl-6">
        <div class="card shadow-none border my-4" data-component-card="data-component-card">
            <div class="card-header p-4 border-bottom bg-body">
                <div class="row g-3 justify-content-between align-items-center">
                    <div class="col-12 col-md">
                        <h4 class="text-body mb-0" data-anchor="data-anchor">With Validation</h4>
                    </div>
                    <div class="col col-md-auto">
                        <nav class="nav justify-content-end doc-tab-nav align-items-center" role="tablist"><button class="btn btn-link px-2 text-body copy-code-btn" type="button"><span class="fas fa-copy me-1"></span>Copy Code</button><a class="btn btn-sm btn-phoenix-primary code-btn ms-2" data-bs-toggle="collapse" href="#with-validation-code" role="button" aria-controls="with-validation-code" aria-expanded="false"> <span class="me-2" data-feather="code"></span>View code</a><a class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span class="me-2" data-feather="eye"></span>Preview</a></nav>
                    </div>
                </div>
            </div>
            <div class="card-body p-0">
                <div class="collapse code-collapse" id="with-validation-code">
                    <pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;div class=&quot;card theme-wizard mb-5&quot; data-theme-wizard=&quot;data-theme-wizard&quot;&gt;
  &lt;div class=&quot;card-header bg-body-highlight pt-3 pb-2 border-bottom-0&quot;&gt;
    &lt;ul class=&quot;nav justify-content-between nav-wizard&quot;&gt;
      &lt;li class=&quot;nav-item&quot;&gt;&lt;a class=&quot;nav-link active fw-semibold&quot; href=&quot;#bootstrap-wizard-validation-tab1&quot; data-bs-toggle=&quot;tab&quot; data-wizard-step=&quot;1&quot;&gt;
          &lt;div class=&quot;text-center d-inline-block&quot;&gt;&lt;span class=&quot;nav-item-circle-parent&quot;&gt;&lt;span class=&quot;nav-item-circle&quot;&gt;&lt;span class=&quot;fas fa-lock&quot;&gt;&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;span class=&quot;d-none d-md-block mt-1 fs-9&quot;&gt;Account&lt;/span&gt;&lt;/div&gt;
        &lt;/a&gt;&lt;/li&gt;
      &lt;li class=&quot;nav-item&quot;&gt;&lt;a class=&quot;nav-link fw-semibold&quot; href=&quot;#bootstrap-wizard-validation-tab2&quot; data-bs-toggle=&quot;tab&quot; data-wizard-step=&quot;2&quot;&gt;
          &lt;div class=&quot;text-center d-inline-block&quot;&gt;&lt;span class=&quot;nav-item-circle-parent&quot;&gt;&lt;span class=&quot;nav-item-circle&quot;&gt;&lt;span class=&quot;fas fa-user&quot;&gt;&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;span class=&quot;d-none d-md-block mt-1 fs-9&quot;&gt;Personal&lt;/span&gt;&lt;/div&gt;
        &lt;/a&gt;&lt;/li&gt;
      &lt;li class=&quot;nav-item&quot;&gt;&lt;a class=&quot;nav-link fw-semibold&quot; href=&quot;#bootstrap-wizard-validation-tab3&quot; data-bs-toggle=&quot;tab&quot; data-wizard-step=&quot;3&quot;&gt;
          &lt;div class=&quot;text-center d-inline-block&quot;&gt;&lt;span class=&quot;nav-item-circle-parent&quot;&gt;&lt;span class=&quot;nav-item-circle&quot;&gt;&lt;span class=&quot;fas fa-file-alt&quot;&gt;&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;span class=&quot;d-none d-md-block mt-1 fs-9&quot;&gt;Billing&lt;/span&gt;&lt;/div&gt;
        &lt;/a&gt;&lt;/li&gt;
      &lt;li class=&quot;nav-item&quot;&gt;&lt;a class=&quot;nav-link fw-semibold&quot; href=&quot;#bootstrap-wizard-validation-tab4&quot; data-bs-toggle=&quot;tab&quot; data-wizard-step=&quot;4&quot;&gt;
          &lt;div class=&quot;text-center d-inline-block&quot;&gt;&lt;span class=&quot;nav-item-circle-parent&quot;&gt;&lt;span class=&quot;nav-item-circle&quot;&gt;&lt;span class=&quot;fas fa-check&quot;&gt;&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;span class=&quot;d-none d-md-block mt-1 fs-9&quot;&gt;Done&lt;/span&gt;&lt;/div&gt;
        &lt;/a&gt;&lt;/li&gt;
    &lt;/ul&gt;
  &lt;/div&gt;
  &lt;div class=&quot;card-body pt-4 pb-0&quot;&gt;
    &lt;div class=&quot;tab-content&quot;&gt;
      &lt;div class=&quot;tab-pane active&quot; role=&quot;tabpanel&quot; aria-labelledby=&quot;bootstrap-wizard-validation-tab1&quot; id=&quot;bootstrap-wizard-validation-tab1&quot;&gt;
        &lt;form class=&quot;needs-validation&quot; id=&quot;wizardValidationForm1&quot; novalidate=&quot;novalidate&quot; data-wizard-form=&quot;1&quot;&gt;
          &lt;div class=&quot;mb-2&quot;&gt;&lt;label class=&quot;form-label text-body&quot; for=&quot;bootstrap-wizard-validation-wizard-name&quot;&gt;Name&lt;/label&gt;&lt;input class=&quot;form-control&quot; type=&quot;text&quot; name=&quot;name&quot; placeholder=&quot;John Smith&quot; required=&quot;required&quot; id=&quot;bootstrap-wizard-validation-wizard-name&quot; /&gt;
            &lt;div class=&quot;invalid-feedback&quot;&gt;Please choose a username.&lt;/div&gt;
          &lt;/div&gt;
          &lt;div class=&quot;mb-2&quot;&gt;&lt;label class=&quot;form-label&quot; for=&quot;bootstrap-wizard-validation-wizard-email&quot;&gt;Email*&lt;/label&gt;&lt;input class=&quot;form-control&quot; type=&quot;email&quot; name=&quot;email&quot; placeholder=&quot;Email address&quot; pattern=&quot;^([a-zA-Z0-9_.-])+@(([a-zA-Z0-9-])+.)+([a-zA-Z0-9]{2,4})+$&quot; required=&quot;required&quot; id=&quot;bootstrap-wizard-validation-wizard-email&quot; /&gt;
            &lt;div class=&quot;invalid-feedback&quot;&gt;You must add email&lt;/div&gt;
          &lt;/div&gt;
          &lt;div class=&quot;row g-3 mb-3&quot;&gt;
            &lt;div class=&quot;col-sm-6&quot;&gt;
              &lt;div class=&quot;mb-2 mb-sm-0&quot;&gt;&lt;label class=&quot;form-label text-body&quot; for=&quot;bootstrap-wizard-validation-wizard-password&quot;&gt;Password*&lt;/label&gt;&lt;input class=&quot;form-control&quot; type=&quot;password&quot; name=&quot;password&quot; placeholder=&quot;Password&quot; required=&quot;required&quot; id=&quot;bootstrap-wizard-validation-wizard-password&quot; data-wizard-password=&quot;true&quot; /&gt;
                &lt;div class=&quot;invalid-feedback&quot;&gt;Please enter password&lt;/div&gt;
              &lt;/div&gt;
            &lt;/div&gt;
            &lt;div class=&quot;col-sm-6&quot;&gt;
              &lt;div class=&quot;mb-2&quot;&gt;&lt;label class=&quot;form-label text-body&quot; for=&quot;bootstrap-wizard-validation-wizard-confirm-password&quot;&gt;Confirm Password*&lt;/label&gt;&lt;input class=&quot;form-control&quot; type=&quot;password&quot; name=&quot;confirmPassword&quot; placeholder=&quot;Confirm Password&quot; required=&quot;required&quot; id=&quot;bootstrap-wizard-validation-wizard-confirm-password&quot; data-wizard-confirm-password=&quot;true&quot; /&gt;
                &lt;div class=&quot;invalid-feedback&quot;&gt;Passwords need to match&lt;/div&gt;
              &lt;/div&gt;
            &lt;/div&gt;
          &lt;/div&gt;
          &lt;div class=&quot;form-check&quot;&gt;&lt;input class=&quot;form-check-input&quot; type=&quot;checkbox&quot; name=&quot;terms&quot; required=&quot;required&quot; checked=&quot;checked&quot; id=&quot;bootstrap-wizard-validation-wizard-checkbox&quot; /&gt;&lt;label class=&quot;form-check-label text-body&quot; for=&quot;bootstrap-wizard-validation-wizard-checkbox&quot;&gt;I accept the &lt;a href=&quot;#!&quot;&gt;terms &lt;/a&gt;and &lt;a href=&quot;#!&quot;&gt;privacy policy&lt;/a&gt;&lt;/label&gt;&lt;/div&gt;
        &lt;/form&gt;
      &lt;/div&gt;
      &lt;div class=&quot;tab-pane&quot; role=&quot;tabpanel&quot; aria-labelledby=&quot;bootstrap-wizard-validation-tab2&quot; id=&quot;bootstrap-wizard-validation-tab2&quot;&gt;
        &lt;form class=&quot;needs-validation&quot; id=&quot;wizardValidationForm2&quot; novalidate=&quot;novalidate&quot; data-wizard-form=&quot;2&quot;&gt;
          &lt;div class=&quot;row g-4 mb-4&quot; data-dropzone=&quot;data-dropzone&quot; data-options='{&quot;maxFiles&quot;:1,&quot;data&quot;:[{&quot;name&quot;:&quot;avatar.webp&quot;,&quot;size&quot;:&quot;54kb&quot;,&quot;url&quot;:&quot;../../assets/img/team&quot;}]}'&gt;
            &lt;div class=&quot;fallback&quot;&gt;&lt;input type=&quot;file&quot; name=&quot;file&quot; /&gt;&lt;/div&gt;
            &lt;div class=&quot;col-md-auto&quot;&gt;
              &lt;div class=&quot;dz-preview dz-preview-single&quot;&gt;
                &lt;div class=&quot;dz-preview-cover d-flex align-items-center justify-content-center mb-2 mb-md-0&quot;&gt;
                  &lt;div class=&quot;avatar avatar-4xl&quot;&gt;&lt;img class=&quot;rounded-circle avatar-placeholder&quot; src=&quot;../../assets/img/team/avatar.webp&quot; alt=&quot;...&quot; data-dz-thumbnail=&quot;data-dz-thumbnail&quot; /&gt;&lt;/div&gt;
                  &lt;div class=&quot;dz-progress&quot;&gt;&lt;span class=&quot;dz-upload&quot; data-dz-uploadprogress=&quot;&quot;&gt;&lt;/span&gt;&lt;/div&gt;
                &lt;/div&gt;
              &lt;/div&gt;
            &lt;/div&gt;
            &lt;div class=&quot;col-md&quot;&gt;
              &lt;div class=&quot;dz-message dropzone-area px-2 py-3&quot; data-dz-message=&quot;data-dz-message&quot;&gt;
                &lt;div class=&quot;text-center text-body-emphasis&quot;&gt;
                  &lt;h5 class=&quot;mb-2&quot;&gt;&lt;span class=&quot;fa-solid fa-upload me-2&quot;&gt;&lt;/span&gt;Upload Profile Picture&lt;/h5&gt;
                  &lt;p class=&quot;mb-0 fs-9 text-body-tertiary text-opacity-85 lh-sm&quot;&gt;Upload a 300x300 jpg image with &lt;br /&gt;a maximum size of 400KB&lt;/p&gt;
                &lt;/div&gt;
              &lt;/div&gt;
            &lt;/div&gt;
          &lt;/div&gt;
          &lt;div class=&quot;mb-2&quot;&gt;&lt;label class=&quot;form-label&quot; for=&quot;bootstrap-wizard-validation-gender&quot;&gt;Gender&lt;/label&gt;&lt;select class=&quot;form-select&quot; name=&quot;gender&quot; id=&quot;bootstrap-wizard-validation-gender&quot; required=&quot;required&quot;&gt;
              &lt;option value=&quot;&quot;&gt;Select your gender ...&lt;/option&gt;
              &lt;option value=&quot;Male&quot;&gt;Male&lt;/option&gt;
              &lt;option value=&quot;Female&quot;&gt;Female&lt;/option&gt;
              &lt;option value=&quot;Other&quot;&gt;Other&lt;/option&gt;
            &lt;/select&gt;
            &lt;div class=&quot;invalid-feedback&quot;&gt;This field is required.&lt;/div&gt;
          &lt;/div&gt;
          &lt;div class=&quot;mb-2&quot;&gt;&lt;label class=&quot;form-label&quot; for=&quot;bootstrap-wizard-validation-wizard-phone&quot;&gt;Phone&lt;/label&gt;&lt;input class=&quot;form-control&quot; type=&quot;text&quot; name=&quot;phone&quot; placeholder=&quot;Phone&quot; id=&quot;bootstrap-wizard-validation-wizard-phone&quot; required=&quot;required&quot; /&gt;
            &lt;div class=&quot;invalid-feedback&quot;&gt;This field is required.&lt;/div&gt;
          &lt;/div&gt;
          &lt;div class=&quot;mb-2&quot;&gt;&lt;label class=&quot;form-label&quot; for=&quot;bootstrap-wizard-validation-wizard-datepicker&quot;&gt;Date of Birth&lt;/label&gt;&lt;input class=&quot;form-control datetimepicker&quot; type=&quot;text&quot; placeholder=&quot;d/m/y&quot; data-options='{&quot;dateFormat&quot;:&quot;d/m/y&quot;,&quot;disableMobile&quot;:true}' required=&quot;required&quot; id=&quot;bootstrap-wizard-validation-wizard-datepicker&quot; /&gt;
            &lt;div class=&quot;invalid-feedback&quot;&gt;This field is required.&lt;/div&gt;
          &lt;/div&gt;
          &lt;div class=&quot;mb-2&quot;&gt;&lt;label class=&quot;form-label&quot; for=&quot;bootstrap-wizard-validation-wizard-address&quot;&gt;Address&lt;/label&gt;&lt;textarea class=&quot;form-control&quot; rows=&quot;4&quot; id=&quot;bootstrap-wizard-validation-wizard-address&quot; required=&quot;required&quot;&gt;&lt;/textarea&gt;
            &lt;div class=&quot;invalid-feedback&quot;&gt;This field is required.&lt;/div&gt;
          &lt;/div&gt;
        &lt;/form&gt;
      &lt;/div&gt;
      &lt;div class=&quot;tab-pane&quot; role=&quot;tabpanel&quot; aria-labelledby=&quot;bootstrap-wizard-validation-tab3&quot; id=&quot;bootstrap-wizard-validation-tab3&quot;&gt;
        &lt;form class=&quot;mb-2 needs-validation&quot; id=&quot;wizardValidationForm3&quot; novalidate=&quot;novalidate&quot; data-wizard-form=&quot;3&quot;&gt;
          &lt;div class=&quot;row gx-3 gy-2&quot;&gt;
            &lt;div class=&quot;col-6&quot;&gt;&lt;label class=&quot;form-label&quot; for=&quot;bootstrap-wizard-validation-card-number&quot;&gt;Card Number&lt;/label&gt;&lt;input class=&quot;form-control&quot; placeholder=&quot;XXXX XXXX XXXX XXXX&quot; type=&quot;text&quot; required=&quot;required&quot; id=&quot;bootstrap-wizard-validation-card-number&quot; /&gt;
              &lt;div class=&quot;invalid-feedback&quot;&gt;This field is required.&lt;/div&gt;
            &lt;/div&gt;
            &lt;div class=&quot;col-6&quot;&gt;&lt;label class=&quot;form-label&quot; for=&quot;bootstrap-wizard-validation-card-name&quot;&gt;Name&lt;/label&gt;&lt;input class=&quot;form-control&quot; placeholder=&quot;John Doe&quot; name=&quot;cardName&quot; type=&quot;text&quot; id=&quot;bootstrap-wizard-validation-card-name&quot; required=&quot;required&quot; /&gt;
              &lt;div class=&quot;invalid-feedback&quot;&gt;This field is required.&lt;/div&gt;
            &lt;/div&gt;
            &lt;div class=&quot;col-6&quot;&gt;&lt;label class=&quot;form-label&quot; for=&quot;bootstrap-wizard-validation-card-holder-country&quot;&gt;Country&lt;/label&gt;&lt;select class=&quot;form-select&quot; name=&quot;customSelectCountry&quot; id=&quot;bootstrap-wizard-validation-card-holder-country&quot; required=&quot;required&quot;&gt;
                &lt;option value=&quot;&quot;&gt;Select your country ...&lt;/option&gt;
                &lt;option value=&quot;Afghanistan&quot;&gt;Afghanistan&lt;/option&gt;
                &lt;option value=&quot;Albania&quot;&gt;Albania&lt;/option&gt;
                &lt;option value=&quot;Algeria&quot;&gt;Algeria&lt;/option&gt;
                &lt;option value=&quot;American Samoa&quot;&gt;American Samoa&lt;/option&gt;
                &lt;option value=&quot;Andorra&quot;&gt;Andorra&lt;/option&gt;
                &lt;option value=&quot;Angola&quot;&gt;Angola&lt;/option&gt;
                &lt;option value=&quot;Anguilla&quot;&gt;Anguilla&lt;/option&gt;
                &lt;option value=&quot;Antarctica&quot;&gt;Antarctica&lt;/option&gt;
                &lt;option value=&quot;Antigua and Barbuda&quot;&gt;Antigua and Barbuda&lt;/option&gt;
                &lt;option value=&quot;Argentina&quot;&gt;Argentina&lt;/option&gt;
                &lt;option value=&quot;Armenia&quot;&gt;Armenia&lt;/option&gt;
                &lt;option value=&quot;Aruba&quot;&gt;Aruba&lt;/option&gt;
                &lt;option value=&quot;Australia&quot;&gt;Australia&lt;/option&gt;
                &lt;option value=&quot;Austria&quot;&gt;Austria&lt;/option&gt;
                &lt;option value=&quot;Azerbaijan&quot;&gt;Azerbaijan&lt;/option&gt;
                &lt;option value=&quot;Bahamas&quot;&gt;Bahamas&lt;/option&gt;
                &lt;option value=&quot;Bahrain&quot;&gt;Bahrain&lt;/option&gt;
                &lt;option value=&quot;Bangladesh&quot;&gt;Bangladesh&lt;/option&gt;
                &lt;option value=&quot;Barbados&quot;&gt;Barbados&lt;/option&gt;
                &lt;option value=&quot;Belarus&quot;&gt;Belarus&lt;/option&gt;
                &lt;option value=&quot;Belgium&quot;&gt;Belgium&lt;/option&gt;
                &lt;option value=&quot;Belize&quot;&gt;Belize&lt;/option&gt;
                &lt;option value=&quot;Benin&quot;&gt;Benin&lt;/option&gt;
                &lt;option value=&quot;Bermuda&quot;&gt;Bermuda&lt;/option&gt;
                &lt;option value=&quot;Bhutan&quot;&gt;Bhutan&lt;/option&gt;
                &lt;option value=&quot;Bolivia&quot;&gt;Bolivia&lt;/option&gt;
                &lt;option value=&quot;Bosnia and Herzegowina&quot;&gt;Bosnia and Herzegowina&lt;/option&gt;
                &lt;option value=&quot;Botswana&quot;&gt;Botswana&lt;/option&gt;
                &lt;option value=&quot;Bouvet Island&quot;&gt;Bouvet Island&lt;/option&gt;
                &lt;option value=&quot;Brazil&quot;&gt;Brazil&lt;/option&gt;
                &lt;option value=&quot;British Indian Ocean Territory&quot;&gt;British Indian Ocean Territory&lt;/option&gt;
                &lt;option value=&quot;Brunei Darussalam&quot;&gt;Brunei Darussalam&lt;/option&gt;
                &lt;option value=&quot;Bulgaria&quot;&gt;Bulgaria&lt;/option&gt;
                &lt;option value=&quot;Burkina Faso&quot;&gt;Burkina Faso&lt;/option&gt;
                &lt;option value=&quot;Burundi&quot;&gt;Burundi&lt;/option&gt;
                &lt;option value=&quot;Cambodia&quot;&gt;Cambodia&lt;/option&gt;
                &lt;option value=&quot;Cameroon&quot;&gt;Cameroon&lt;/option&gt;
                &lt;option value=&quot;Canada&quot;&gt;Canada&lt;/option&gt;
                &lt;option value=&quot;Cape Verde&quot;&gt;Cape Verde&lt;/option&gt;
                &lt;option value=&quot;Cayman Islands&quot;&gt;Cayman Islands&lt;/option&gt;
                &lt;option value=&quot;Central African Republic&quot;&gt;Central African Republic&lt;/option&gt;
                &lt;option value=&quot;Chad&quot;&gt;Chad&lt;/option&gt;
                &lt;option value=&quot;Chile&quot;&gt;Chile&lt;/option&gt;
                &lt;option value=&quot;China&quot;&gt;China&lt;/option&gt;
                &lt;option value=&quot;Christmas Island&quot;&gt;Christmas Island&lt;/option&gt;
                &lt;option value=&quot;Cocos (Keeling) Islands&quot;&gt;Cocos (Keeling) Islands&lt;/option&gt;
                &lt;option value=&quot;Colombia&quot;&gt;Colombia&lt;/option&gt;
                &lt;option value=&quot;Comoros&quot;&gt;Comoros&lt;/option&gt;
                &lt;option value=&quot;Congo&quot;&gt;Congo&lt;/option&gt;
                &lt;option value=&quot;Congo, the Democratic Republic of the&quot;&gt;Congo, the Democratic Republic of the&lt;/option&gt;
                &lt;option value=&quot;Cook Islands&quot;&gt;Cook Islands&lt;/option&gt;
                &lt;option value=&quot;Costa Rica&quot;&gt;Costa Rica&lt;/option&gt;
                &lt;option value=&quot;Cote d'Ivoire&quot;&gt;Cote d'Ivoire&lt;/option&gt;
                &lt;option value=&quot;Croatia (Hrvatska)&quot;&gt;Croatia (Hrvatska)&lt;/option&gt;
                &lt;option value=&quot;Cuba&quot;&gt;Cuba&lt;/option&gt;
                &lt;option value=&quot;Cyprus&quot;&gt;Cyprus&lt;/option&gt;
                &lt;option value=&quot;Czech Republic&quot;&gt;Czech Republic&lt;/option&gt;
                &lt;option value=&quot;Denmark&quot;&gt;Denmark&lt;/option&gt;
                &lt;option value=&quot;Djibouti&quot;&gt;Djibouti&lt;/option&gt;
                &lt;option value=&quot;Dominica&quot;&gt;Dominica&lt;/option&gt;
                &lt;option value=&quot;Dominican Republic&quot;&gt;Dominican Republic&lt;/option&gt;
                &lt;option value=&quot;East Timor&quot;&gt;East Timor&lt;/option&gt;
                &lt;option value=&quot;Ecuador&quot;&gt;Ecuador&lt;/option&gt;
                &lt;option value=&quot;Egypt&quot;&gt;Egypt&lt;/option&gt;
                &lt;option value=&quot;El Salvador&quot;&gt;El Salvador&lt;/option&gt;
                &lt;option value=&quot;Equatorial Guinea&quot;&gt;Equatorial Guinea&lt;/option&gt;
                &lt;option value=&quot;Eritrea&quot;&gt;Eritrea&lt;/option&gt;
                &lt;option value=&quot;Estonia&quot;&gt;Estonia&lt;/option&gt;
                &lt;option value=&quot;Ethiopia&quot;&gt;Ethiopia&lt;/option&gt;
                &lt;option value=&quot;Falkland Islands (Malvinas)&quot;&gt;Falkland Islands (Malvinas)&lt;/option&gt;
                &lt;option value=&quot;Faroe Islands&quot;&gt;Faroe Islands&lt;/option&gt;
                &lt;option value=&quot;Fiji&quot;&gt;Fiji&lt;/option&gt;
                &lt;option value=&quot;Finland&quot;&gt;Finland&lt;/option&gt;
                &lt;option value=&quot;France&quot;&gt;France&lt;/option&gt;
                &lt;option value=&quot;France Metropolitan&quot;&gt;France Metropolitan&lt;/option&gt;
                &lt;option value=&quot;French Guiana&quot;&gt;French Guiana&lt;/option&gt;
                &lt;option value=&quot;French Polynesia&quot;&gt;French Polynesia&lt;/option&gt;
                &lt;option value=&quot;French Southern Territories&quot;&gt;French Southern Territories&lt;/option&gt;
                &lt;option value=&quot;Gabon&quot;&gt;Gabon&lt;/option&gt;
                &lt;option value=&quot;Gambia&quot;&gt;Gambia&lt;/option&gt;
                &lt;option value=&quot;Georgia&quot;&gt;Georgia&lt;/option&gt;
                &lt;option value=&quot;Germany&quot;&gt;Germany&lt;/option&gt;
                &lt;option value=&quot;Ghana&quot;&gt;Ghana&lt;/option&gt;
                &lt;option value=&quot;Gibraltar&quot;&gt;Gibraltar&lt;/option&gt;
                &lt;option value=&quot;Greece&quot;&gt;Greece&lt;/option&gt;
                &lt;option value=&quot;Greenland&quot;&gt;Greenland&lt;/option&gt;
                &lt;option value=&quot;Grenada&quot;&gt;Grenada&lt;/option&gt;
                &lt;option value=&quot;Guadeloupe&quot;&gt;Guadeloupe&lt;/option&gt;
                &lt;option value=&quot;Guam&quot;&gt;Guam&lt;/option&gt;
                &lt;option value=&quot;Guatemala&quot;&gt;Guatemala&lt;/option&gt;
                &lt;option value=&quot;Guinea&quot;&gt;Guinea&lt;/option&gt;
                &lt;option value=&quot;Guinea-Bissau&quot;&gt;Guinea-Bissau&lt;/option&gt;
                &lt;option value=&quot;Guyana&quot;&gt;Guyana&lt;/option&gt;
                &lt;option value=&quot;Haiti&quot;&gt;Haiti&lt;/option&gt;
                &lt;option value=&quot;Heard and Mc Donald Islands&quot;&gt;Heard and Mc Donald Islands&lt;/option&gt;
                &lt;option value=&quot;Holy See (Vatican City State)&quot;&gt;Holy See (Vatican City State)&lt;/option&gt;
                &lt;option value=&quot;Honduras&quot;&gt;Honduras&lt;/option&gt;
                &lt;option value=&quot;Hong Kong&quot;&gt;Hong Kong&lt;/option&gt;
                &lt;option value=&quot;Hungary&quot;&gt;Hungary&lt;/option&gt;
                &lt;option value=&quot;Iceland&quot;&gt;Iceland&lt;/option&gt;
                &lt;option value=&quot;India&quot;&gt;India&lt;/option&gt;
                &lt;option value=&quot;Indonesia&quot;&gt;Indonesia&lt;/option&gt;
                &lt;option value=&quot;Iran (Islamic Republic of)&quot;&gt;Iran (Islamic Republic of)&lt;/option&gt;
                &lt;option value=&quot;Iraq&quot;&gt;Iraq&lt;/option&gt;
                &lt;option value=&quot;Ireland&quot;&gt;Ireland&lt;/option&gt;
                &lt;option value=&quot;Israel&quot;&gt;Israel&lt;/option&gt;
                &lt;option value=&quot;Italy&quot;&gt;Italy&lt;/option&gt;
                &lt;option value=&quot;Jamaica&quot;&gt;Jamaica&lt;/option&gt;
                &lt;option value=&quot;Japan&quot;&gt;Japan&lt;/option&gt;
                &lt;option value=&quot;Jordan&quot;&gt;Jordan&lt;/option&gt;
                &lt;option value=&quot;Kazakhstan&quot;&gt;Kazakhstan&lt;/option&gt;
                &lt;option value=&quot;Kenya&quot;&gt;Kenya&lt;/option&gt;
                &lt;option value=&quot;Kiribati&quot;&gt;Kiribati&lt;/option&gt;
                &lt;option value=&quot;Korea, Democratic People's Republic of&quot;&gt;Korea, Democratic People's Republic of&lt;/option&gt;
                &lt;option value=&quot;Korea, Republic of&quot;&gt;Korea, Republic of&lt;/option&gt;
                &lt;option value=&quot;Kuwait&quot;&gt;Kuwait&lt;/option&gt;
                &lt;option value=&quot;Kyrgyzstan&quot;&gt;Kyrgyzstan&lt;/option&gt;
                &lt;option value=&quot;Lao, People's Democratic Republic&quot;&gt;Lao, People's Democratic Republic&lt;/option&gt;
                &lt;option value=&quot;Latvia&quot;&gt;Latvia&lt;/option&gt;
                &lt;option value=&quot;Lebanon&quot;&gt;Lebanon&lt;/option&gt;
                &lt;option value=&quot;Lesotho&quot;&gt;Lesotho&lt;/option&gt;
                &lt;option value=&quot;Liberia&quot;&gt;Liberia&lt;/option&gt;
                &lt;option value=&quot;Libyan Arab Jamahiriya&quot;&gt;Libyan Arab Jamahiriya&lt;/option&gt;
                &lt;option value=&quot;Liechtenstein&quot;&gt;Liechtenstein&lt;/option&gt;
                &lt;option value=&quot;Lithuania&quot;&gt;Lithuania&lt;/option&gt;
                &lt;option value=&quot;Luxembourg&quot;&gt;Luxembourg&lt;/option&gt;
                &lt;option value=&quot;Macau&quot;&gt;Macau&lt;/option&gt;
                &lt;option value=&quot;Macedonia, The Former Yugoslav Republic of&quot;&gt;Macedonia, The Former Yugoslav Republic of&lt;/option&gt;
                &lt;option value=&quot;Madagascar&quot;&gt;Madagascar&lt;/option&gt;
                &lt;option value=&quot;Malawi&quot;&gt;Malawi&lt;/option&gt;
                &lt;option value=&quot;Malaysia&quot;&gt;Malaysia&lt;/option&gt;
                &lt;option value=&quot;Maldives&quot;&gt;Maldives&lt;/option&gt;
                &lt;option value=&quot;Mali&quot;&gt;Mali&lt;/option&gt;
                &lt;option value=&quot;Malta&quot;&gt;Malta&lt;/option&gt;
                &lt;option value=&quot;Marshall Islands&quot;&gt;Marshall Islands&lt;/option&gt;
                &lt;option value=&quot;Martinique&quot;&gt;Martinique&lt;/option&gt;
                &lt;option value=&quot;Mauritania&quot;&gt;Mauritania&lt;/option&gt;
                &lt;option value=&quot;Mauritius&quot;&gt;Mauritius&lt;/option&gt;
                &lt;option value=&quot;Mayotte&quot;&gt;Mayotte&lt;/option&gt;
                &lt;option value=&quot;Mexico&quot;&gt;Mexico&lt;/option&gt;
                &lt;option value=&quot;Micronesia, Federated States of&quot;&gt;Micronesia, Federated States of&lt;/option&gt;
                &lt;option value=&quot;Moldova, Republic of&quot;&gt;Moldova, Republic of&lt;/option&gt;
                &lt;option value=&quot;Monaco&quot;&gt;Monaco&lt;/option&gt;
                &lt;option value=&quot;Mongolia&quot;&gt;Mongolia&lt;/option&gt;
                &lt;option value=&quot;Montserrat&quot;&gt;Montserrat&lt;/option&gt;
                &lt;option value=&quot;Morocco&quot;&gt;Morocco&lt;/option&gt;
                &lt;option value=&quot;Mozambique&quot;&gt;Mozambique&lt;/option&gt;
                &lt;option value=&quot;Myanmar&quot;&gt;Myanmar&lt;/option&gt;
                &lt;option value=&quot;Namibia&quot;&gt;Namibia&lt;/option&gt;
                &lt;option value=&quot;Nauru&quot;&gt;Nauru&lt;/option&gt;
                &lt;option value=&quot;Nepal&quot;&gt;Nepal&lt;/option&gt;
                &lt;option value=&quot;Netherlands&quot;&gt;Netherlands&lt;/option&gt;
                &lt;option value=&quot;Netherlands Antilles&quot;&gt;Netherlands Antilles&lt;/option&gt;
                &lt;option value=&quot;New Caledonia&quot;&gt;New Caledonia&lt;/option&gt;
                &lt;option value=&quot;New Zealand&quot;&gt;New Zealand&lt;/option&gt;
                &lt;option value=&quot;Nicaragua&quot;&gt;Nicaragua&lt;/option&gt;
                &lt;option value=&quot;Niger&quot;&gt;Niger&lt;/option&gt;
                &lt;option value=&quot;Nigeria&quot;&gt;Nigeria&lt;/option&gt;
                &lt;option value=&quot;Niue&quot;&gt;Niue&lt;/option&gt;
                &lt;option value=&quot;Norfolk Island&quot;&gt;Norfolk Island&lt;/option&gt;
                &lt;option value=&quot;Northern Mariana Islands&quot;&gt;Northern Mariana Islands&lt;/option&gt;
                &lt;option value=&quot;Norway&quot;&gt;Norway&lt;/option&gt;
                &lt;option value=&quot;Oman&quot;&gt;Oman&lt;/option&gt;
                &lt;option value=&quot;Pakistan&quot;&gt;Pakistan&lt;/option&gt;
                &lt;option value=&quot;Palau&quot;&gt;Palau&lt;/option&gt;
                &lt;option value=&quot;Panama&quot;&gt;Panama&lt;/option&gt;
                &lt;option value=&quot;Papua New Guinea&quot;&gt;Papua New Guinea&lt;/option&gt;
                &lt;option value=&quot;Paraguay&quot;&gt;Paraguay&lt;/option&gt;
                &lt;option value=&quot;Peru&quot;&gt;Peru&lt;/option&gt;
                &lt;option value=&quot;Philippines&quot;&gt;Philippines&lt;/option&gt;
                &lt;option value=&quot;Pitcairn&quot;&gt;Pitcairn&lt;/option&gt;
                &lt;option value=&quot;Poland&quot;&gt;Poland&lt;/option&gt;
                &lt;option value=&quot;Portugal&quot;&gt;Portugal&lt;/option&gt;
                &lt;option value=&quot;Puerto Rico&quot;&gt;Puerto Rico&lt;/option&gt;
                &lt;option value=&quot;Qatar&quot;&gt;Qatar&lt;/option&gt;
                &lt;option value=&quot;Reunion&quot;&gt;Reunion&lt;/option&gt;
                &lt;option value=&quot;Romania&quot;&gt;Romania&lt;/option&gt;
                &lt;option value=&quot;Russian Federation&quot;&gt;Russian Federation&lt;/option&gt;
                &lt;option value=&quot;Rwanda&quot;&gt;Rwanda&lt;/option&gt;
                &lt;option value=&quot;Saint Kitts and Nevis&quot;&gt;Saint Kitts and Nevis&lt;/option&gt;
                &lt;option value=&quot;Saint Lucia&quot;&gt;Saint Lucia&lt;/option&gt;
                &lt;option value=&quot;Saint Vincent and the Grenadines&quot;&gt;Saint Vincent and the Grenadines&lt;/option&gt;
                &lt;option value=&quot;Samoa&quot;&gt;Samoa&lt;/option&gt;
                &lt;option value=&quot;San Marino&quot;&gt;San Marino&lt;/option&gt;
                &lt;option value=&quot;Sao Tome and Principe&quot;&gt;Sao Tome and Principe&lt;/option&gt;
                &lt;option value=&quot;Saudi Arabia&quot;&gt;Saudi Arabia&lt;/option&gt;
                &lt;option value=&quot;Senegal&quot;&gt;Senegal&lt;/option&gt;
                &lt;option value=&quot;Seychelles&quot;&gt;Seychelles&lt;/option&gt;
                &lt;option value=&quot;Sierra Leone&quot;&gt;Sierra Leone&lt;/option&gt;
                &lt;option value=&quot;Singapore&quot;&gt;Singapore&lt;/option&gt;
                &lt;option value=&quot;Slovakia (Slovak Republic)&quot;&gt;Slovakia (Slovak Republic)&lt;/option&gt;
                &lt;option value=&quot;Slovenia&quot;&gt;Slovenia&lt;/option&gt;
                &lt;option value=&quot;Solomon Islands&quot;&gt;Solomon Islands&lt;/option&gt;
                &lt;option value=&quot;Somalia&quot;&gt;Somalia&lt;/option&gt;
                &lt;option value=&quot;South Africa&quot;&gt;South Africa&lt;/option&gt;
                &lt;option value=&quot;South Georgia and the South Sandwich Islands&quot;&gt;South Georgia and the South Sandwich Islands&lt;/option&gt;
                &lt;option value=&quot;Spain&quot;&gt;Spain&lt;/option&gt;
                &lt;option value=&quot;Sri Lanka&quot;&gt;Sri Lanka&lt;/option&gt;
                &lt;option value=&quot;St. Helena&quot;&gt;St. Helena&lt;/option&gt;
                &lt;option value=&quot;St. Pierre and Miquelon&quot;&gt;St. Pierre and Miquelon&lt;/option&gt;
                &lt;option value=&quot;Sudan&quot;&gt;Sudan&lt;/option&gt;
                &lt;option value=&quot;Suriname&quot;&gt;Suriname&lt;/option&gt;
                &lt;option value=&quot;Svalbard and Jan Mayen Islands&quot;&gt;Svalbard and Jan Mayen Islands&lt;/option&gt;
                &lt;option value=&quot;Swaziland&quot;&gt;Swaziland&lt;/option&gt;
                &lt;option value=&quot;Sweden&quot;&gt;Sweden&lt;/option&gt;
                &lt;option value=&quot;Switzerland&quot;&gt;Switzerland&lt;/option&gt;
                &lt;option value=&quot;Syrian Arab Republic&quot;&gt;Syrian Arab Republic&lt;/option&gt;
                &lt;option value=&quot;Taiwan, Province of China&quot;&gt;Taiwan, Province of China&lt;/option&gt;
                &lt;option value=&quot;Tajikistan&quot;&gt;Tajikistan&lt;/option&gt;
                &lt;option value=&quot;Tanzania, United Republic of&quot;&gt;Tanzania, United Republic of&lt;/option&gt;
                &lt;option value=&quot;Thailand&quot;&gt;Thailand&lt;/option&gt;
                &lt;option value=&quot;Togo&quot;&gt;Togo&lt;/option&gt;
                &lt;option value=&quot;Tokelau&quot;&gt;Tokelau&lt;/option&gt;
                &lt;option value=&quot;Tonga&quot;&gt;Tonga&lt;/option&gt;
                &lt;option value=&quot;Trinidad and Tobago&quot;&gt;Trinidad and Tobago&lt;/option&gt;
                &lt;option value=&quot;Tunisia&quot;&gt;Tunisia&lt;/option&gt;
                &lt;option value=&quot;Turkey&quot;&gt;Turkey&lt;/option&gt;
                &lt;option value=&quot;Turkmenistan&quot;&gt;Turkmenistan&lt;/option&gt;
                &lt;option value=&quot;Turks and Caicos Islands&quot;&gt;Turks and Caicos Islands&lt;/option&gt;
                &lt;option value=&quot;Tuvalu&quot;&gt;Tuvalu&lt;/option&gt;
                &lt;option value=&quot;Uganda&quot;&gt;Uganda&lt;/option&gt;
                &lt;option value=&quot;Ukraine&quot;&gt;Ukraine&lt;/option&gt;
                &lt;option value=&quot;United Arab Emirates&quot;&gt;United Arab Emirates&lt;/option&gt;
                &lt;option value=&quot;United Kingdom&quot;&gt;United Kingdom&lt;/option&gt;
                &lt;option value=&quot;United States&quot;&gt;United States&lt;/option&gt;
                &lt;option value=&quot;United States Minor Outlying Islands&quot;&gt;United States Minor Outlying Islands&lt;/option&gt;
                &lt;option value=&quot;Uruguay&quot;&gt;Uruguay&lt;/option&gt;
                &lt;option value=&quot;Uzbekistan&quot;&gt;Uzbekistan&lt;/option&gt;
                &lt;option value=&quot;Vanuatu&quot;&gt;Vanuatu&lt;/option&gt;
                &lt;option value=&quot;Venezuela&quot;&gt;Venezuela&lt;/option&gt;
                &lt;option value=&quot;Vietnam&quot;&gt;Vietnam&lt;/option&gt;
                &lt;option value=&quot;Virgin Islands (British)&quot;&gt;Virgin Islands (British)&lt;/option&gt;
                &lt;option value=&quot;Virgin Islands (U.S.)&quot;&gt;Virgin Islands (U.S.)&lt;/option&gt;
                &lt;option value=&quot;Wallis and Futuna Islands&quot;&gt;Wallis and Futuna Islands&lt;/option&gt;
                &lt;option value=&quot;Western Sahara&quot;&gt;Western Sahara&lt;/option&gt;
                &lt;option value=&quot;Yemen&quot;&gt;Yemen&lt;/option&gt;
                &lt;option value=&quot;Yugoslavia&quot;&gt;Yugoslavia&lt;/option&gt;
                &lt;option value=&quot;Zambia&quot;&gt;Zambia&lt;/option&gt;
                &lt;option value=&quot;Zimbabwe&quot;&gt;Zimbabwe&lt;/option&gt;
              &lt;/select&gt;
              &lt;div class=&quot;invalid-feedback&quot;&gt;This field is required.&lt;/div&gt;
            &lt;/div&gt;
            &lt;div class=&quot;col-6&quot;&gt;&lt;label class=&quot;form-label&quot; for=&quot;bootstrap-wizard-validation-card-holder-zip-code&quot;&gt;Zip&lt;/label&gt;&lt;input class=&quot;form-control&quot; placeholder=&quot;1234&quot; name=&quot;zipCode&quot; type=&quot;text&quot; id=&quot;bootstrap-wizard-validation-card-holder-zip-code&quot; required=&quot;required&quot; /&gt;
              &lt;div class=&quot;invalid-feedback&quot;&gt;This field is required.&lt;/div&gt;
            &lt;/div&gt;
            &lt;div class=&quot;col-6&quot;&gt;&lt;label class=&quot;form-label&quot; for=&quot;bootstrap-wizard-validation-card-exp-date&quot;&gt;Date of Expire&lt;/label&gt;&lt;input class=&quot;form-control&quot; placeholder=&quot;15/2024&quot; name=&quot;expDate&quot; type=&quot;text&quot; id=&quot;bootstrap-wizard-validation-card-exp-date&quot; required=&quot;required&quot; /&gt;
              &lt;div class=&quot;invalid-feedback&quot;&gt;This field is required.&lt;/div&gt;
            &lt;/div&gt;
            &lt;div class=&quot;col-6&quot;&gt;&lt;label class=&quot;form-label&quot; for=&quot;bootstrap-wizard-validation-card-cvv&quot;&gt;CVV&lt;/label&gt;&lt;input class=&quot;form-control&quot; placeholder=&quot;123&quot; name=&quot;cvv&quot; maxlength=&quot;3&quot; pattern=&quot;[0-9]{3}&quot; type=&quot;number&quot; id=&quot;bootstrap-wizard-validation-card-cvv&quot; required=&quot;required&quot; /&gt;
              &lt;div class=&quot;invalid-feedback&quot;&gt;This field is required.&lt;/div&gt;
            &lt;/div&gt;
          &lt;/div&gt;
        &lt;/form&gt;
      &lt;/div&gt;
      &lt;div class=&quot;tab-pane&quot; role=&quot;tabpanel&quot; aria-labelledby=&quot;bootstrap-wizard-validation-tab4&quot; id=&quot;bootstrap-wizard-validation-tab4&quot;&gt;
        &lt;div class=&quot;row flex-center pb-8 pt-4 gx-3 gy-4&quot;&gt;
          &lt;div class=&quot;col-12 col-sm-auto&quot;&gt;
            &lt;div class=&quot;text-center text-sm-start&quot;&gt;&lt;img class=&quot;d-dark-none&quot; src=&quot;../../assets/img/spot-illustrations/38.webp&quot; alt=&quot;&quot; width=&quot;220&quot; /&gt;&lt;img class=&quot;d-light-none&quot; src=&quot;../../assets/img/spot-illustrations/dark_38.webp&quot; alt=&quot;&quot; width=&quot;220&quot; /&gt;&lt;/div&gt;
          &lt;/div&gt;
          &lt;div class=&quot;col-12 col-sm-auto&quot;&gt;
            &lt;div class=&quot;text-center text-sm-start&quot;&gt;
              &lt;h5 class=&quot;mb-3&quot;&gt;You are all set!&lt;/h5&gt;
              &lt;p class=&quot;text-body-emphasis fs-9&quot;&gt;Now you can access your account&lt;br /&gt;anytime anywhere&lt;/p&gt;&lt;a class=&quot;btn btn-primary px-6&quot; href=&quot;../../modules/forms/wizard.html&quot;&gt;Start Over&lt;/a&gt;
            &lt;/div&gt;
          &lt;/div&gt;
        &lt;/div&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class=&quot;card-footer border-top-0&quot; data-wizard-footer=&quot;data-wizard-footer&quot;&gt;
    &lt;div class=&quot;d-flex pager wizard list-inline mb-0&quot;&gt;&lt;button class=&quot;d-none btn btn-link ps-0&quot; type=&quot;button&quot; data-wizard-prev-btn=&quot;data-wizard-prev-btn&quot;&gt;&lt;span class=&quot;fas fa-chevron-left me-1&quot; data-fa-transform=&quot;shrink-3&quot;&gt;&lt;/span&gt;Previous&lt;/button&gt;
      &lt;div class=&quot;flex-1 text-end&quot;&gt;&lt;button class=&quot;btn btn-primary px-6 px-sm-6&quot; type=&quot;submit&quot; data-wizard-next-btn=&quot;data-wizard-next-btn&quot;&gt;Next&lt;span class=&quot;fas fa-chevron-right ms-1&quot; data-fa-transform=&quot;shrink-3&quot;&gt; &lt;/span&gt;&lt;/button&gt;&lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
                </div>
                <div class="p-4 code-to-copy">
                    <div class="card theme-wizard mb-5" data-theme-wizard="data-theme-wizard">
                        <div class="card-header bg-body-highlight pt-3 pb-2 border-bottom-0">
                            <ul class="nav justify-content-between nav-wizard">
                                <li class="nav-item"><a class="nav-link active fw-semibold" href="#bootstrap-wizard-validation-tab1" data-bs-toggle="tab" data-wizard-step="1">
                                        <div class="text-center d-inline-block"><span class="nav-item-circle-parent"><span class="nav-item-circle"><span class="fas fa-lock"></span></span></span><span class="d-none d-md-block mt-1 fs-9">Account</span></div>
                                    </a></li>
                                <li class="nav-item"><a class="nav-link fw-semibold" href="#bootstrap-wizard-validation-tab2" data-bs-toggle="tab" data-wizard-step="2">
                                        <div class="text-center d-inline-block"><span class="nav-item-circle-parent"><span class="nav-item-circle"><span class="fas fa-user"></span></span></span><span class="d-none d-md-block mt-1 fs-9">Personal</span></div>
                                    </a></li>
                                <li class="nav-item"><a class="nav-link fw-semibold" href="#bootstrap-wizard-validation-tab3" data-bs-toggle="tab" data-wizard-step="3">
                                        <div class="text-center d-inline-block"><span class="nav-item-circle-parent"><span class="nav-item-circle"><span class="fas fa-file-alt"></span></span></span><span class="d-none d-md-block mt-1 fs-9">Billing</span></div>
                                    </a></li>
                                <li class="nav-item"><a class="nav-link fw-semibold" href="#bootstrap-wizard-validation-tab4" data-bs-toggle="tab" data-wizard-step="4">
                                        <div class="text-center d-inline-block"><span class="nav-item-circle-parent"><span class="nav-item-circle"><span class="fas fa-check"></span></span></span><span class="d-none d-md-block mt-1 fs-9">Done</span></div>
                                    </a></li>
                            </ul>
                        </div>
                        <div class="card-body pt-4 pb-0">
                            <div class="tab-content">
                                <div class="tab-pane active" role="tabpanel" aria-labelledby="bootstrap-wizard-validation-tab1" id="bootstrap-wizard-validation-tab1">
                                    <form class="needs-validation" id="wizardValidationForm1" novalidate="novalidate" data-wizard-form="1">
                                        <div class="mb-2"><label class="form-label text-body" for="bootstrap-wizard-validation-wizard-name">Name</label><input class="form-control" type="text" name="name" placeholder="John Smith" required="required" id="bootstrap-wizard-validation-wizard-name" />
                                            <div class="invalid-feedback">Please choose a username.</div>
                                        </div>
                                        <div class="mb-2"><label class="form-label" for="bootstrap-wizard-validation-wizard-email">Email*</label><input class="form-control" type="email" name="email" placeholder="Email address" pattern="^([a-zA-Z0-9_.-])+@(([a-zA-Z0-9-])+.)+([a-zA-Z0-9]{2,4})+$" required="required" id="bootstrap-wizard-validation-wizard-email" />
                                            <div class="invalid-feedback">You must add email</div>
                                        </div>
                                        <div class="row g-3 mb-3">
                                            <div class="col-sm-6">
                                                <div class="mb-2 mb-sm-0"><label class="form-label text-body" for="bootstrap-wizard-validation-wizard-password">Password*</label><input class="form-control" type="password" name="password" placeholder="Password" required="required" id="bootstrap-wizard-validation-wizard-password" data-wizard-password="true" />
                                                    <div class="invalid-feedback">Please enter password</div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="mb-2"><label class="form-label text-body" for="bootstrap-wizard-validation-wizard-confirm-password">Confirm Password*</label><input class="form-control" type="password" name="confirmPassword" placeholder="Confirm Password" required="required" id="bootstrap-wizard-validation-wizard-confirm-password" data-wizard-confirm-password="true" />
                                                    <div class="invalid-feedback">Passwords need to match</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-check"><input class="form-check-input" type="checkbox" name="terms" required="required" checked="checked" id="bootstrap-wizard-validation-wizard-checkbox" /><label class="form-check-label text-body" for="bootstrap-wizard-validation-wizard-checkbox">I accept the <a href="#!">terms </a>and <a href="#!">privacy policy</a></label></div>
                                    </form>
                                </div>
                                <div class="tab-pane" role="tabpanel" aria-labelledby="bootstrap-wizard-validation-tab2" id="bootstrap-wizard-validation-tab2">
                                    <form class="needs-validation" id="wizardValidationForm2" novalidate="novalidate" data-wizard-form="2">
                                        <div class="row g-4 mb-4" data-dropzone="data-dropzone" data-options='{"maxFiles":1,"data":[{"name":"avatar.webp","size":"54kb","url":"../../assets/img/team"}]}'>
                                            <div class="fallback"><input type="file" name="file" /></div>
                                            <div class="col-md-auto">
                                                <div class="dz-preview dz-preview-single">
                                                    <div class="dz-preview-cover d-flex align-items-center justify-content-center mb-2 mb-md-0">
                                                        <div class="avatar avatar-4xl"><img class="rounded-circle avatar-placeholder" src="../../assets/img/team/avatar.webp" alt="..." data-dz-thumbnail="data-dz-thumbnail" /></div>
                                                        <div class="dz-progress"><span class="dz-upload" data-dz-uploadprogress=""></span></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md">
                                                <div class="dz-message dropzone-area px-2 py-3" data-dz-message="data-dz-message">
                                                    <div class="text-center text-body-emphasis">
                                                        <h5 class="mb-2"><span class="fa-solid fa-upload me-2"></span>Upload Profile Picture</h5>
                                                        <p class="mb-0 fs-9 text-body-tertiary text-opacity-85 lh-sm">Upload a 300x300 jpg image with <br />a maximum size of 400KB</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-2"><label class="form-label" for="bootstrap-wizard-validation-gender">Gender</label><select class="form-select" name="gender" id="bootstrap-wizard-validation-gender" required="required">
                                                <option value="">Select your gender ...</option>
                                                <option value="Male">Male</option>
                                                <option value="Female">Female</option>
                                                <option value="Other">Other</option>
                                            </select>
                                            <div class="invalid-feedback">This field is required.</div>
                                        </div>
                                        <div class="mb-2"><label class="form-label" for="bootstrap-wizard-validation-wizard-phone">Phone</label><input class="form-control" type="text" name="phone" placeholder="Phone" id="bootstrap-wizard-validation-wizard-phone" required="required" />
                                            <div class="invalid-feedback">This field is required.</div>
                                        </div>
                                        <div class="mb-2"><label class="form-label" for="bootstrap-wizard-validation-wizard-datepicker">Date of Birth</label><input class="form-control datetimepicker" type="text" placeholder="d/m/y" data-options='{"dateFormat":"d/m/y","disableMobile":true}' required="required" id="bootstrap-wizard-validation-wizard-datepicker" />
                                            <div class="invalid-feedback">This field is required.</div>
                                        </div>
                                        <div class="mb-2"><label class="form-label" for="bootstrap-wizard-validation-wizard-address">Address</label><textarea class="form-control" rows="4" id="bootstrap-wizard-validation-wizard-address" required="required"></textarea>
                                            <div class="invalid-feedback">This field is required.</div>
                                        </div>
                                    </form>
                                </div>
                                <div class="tab-pane" role="tabpanel" aria-labelledby="bootstrap-wizard-validation-tab3" id="bootstrap-wizard-validation-tab3">
                                    <form class="mb-2 needs-validation" id="wizardValidationForm3" novalidate="novalidate" data-wizard-form="3">
                                        <div class="row gx-3 gy-2">
                                            <div class="col-6"><label class="form-label" for="bootstrap-wizard-validation-card-number">Card Number</label><input class="form-control" placeholder="XXXX XXXX XXXX XXXX" type="text" required="required" id="bootstrap-wizard-validation-card-number" />
                                                <div class="invalid-feedback">This field is required.</div>
                                            </div>
                                            <div class="col-6"><label class="form-label" for="bootstrap-wizard-validation-card-name">Name</label><input class="form-control" placeholder="John Doe" name="cardName" type="text" id="bootstrap-wizard-validation-card-name" required="required" />
                                                <div class="invalid-feedback">This field is required.</div>
                                            </div>
                                            <div class="col-6"><label class="form-label" for="bootstrap-wizard-validation-card-holder-country">Country</label><select class="form-select" name="customSelectCountry" id="bootstrap-wizard-validation-card-holder-country" required="required">
                                                    <option value="">Select your country ...</option>
                                                    <option value="Afghanistan">Afghanistan</option>
                                                    <option value="Albania">Albania</option>
                                                    <option value="Algeria">Algeria</option>
                                                    <option value="American Samoa">American Samoa</option>
                                                    <option value="Andorra">Andorra</option>
                                                    <option value="Angola">Angola</option>
                                                    <option value="Anguilla">Anguilla</option>
                                                    <option value="Antarctica">Antarctica</option>
                                                    <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                                    <option value="Argentina">Argentina</option>
                                                    <option value="Armenia">Armenia</option>
                                                    <option value="Aruba">Aruba</option>
                                                    <option value="Australia">Australia</option>
                                                    <option value="Austria">Austria</option>
                                                    <option value="Azerbaijan">Azerbaijan</option>
                                                    <option value="Bahamas">Bahamas</option>
                                                    <option value="Bahrain">Bahrain</option>
                                                    <option value="Bangladesh">Bangladesh</option>
                                                    <option value="Barbados">Barbados</option>
                                                    <option value="Belarus">Belarus</option>
                                                    <option value="Belgium">Belgium</option>
                                                    <option value="Belize">Belize</option>
                                                    <option value="Benin">Benin</option>
                                                    <option value="Bermuda">Bermuda</option>
                                                    <option value="Bhutan">Bhutan</option>
                                                    <option value="Bolivia">Bolivia</option>
                                                    <option value="Bosnia and Herzegowina">Bosnia and Herzegowina</option>
                                                    <option value="Botswana">Botswana</option>
                                                    <option value="Bouvet Island">Bouvet Island</option>
                                                    <option value="Brazil">Brazil</option>
                                                    <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                                                    <option value="Brunei Darussalam">Brunei Darussalam</option>
                                                    <option value="Bulgaria">Bulgaria</option>
                                                    <option value="Burkina Faso">Burkina Faso</option>
                                                    <option value="Burundi">Burundi</option>
                                                    <option value="Cambodia">Cambodia</option>
                                                    <option value="Cameroon">Cameroon</option>
                                                    <option value="Canada">Canada</option>
                                                    <option value="Cape Verde">Cape Verde</option>
                                                    <option value="Cayman Islands">Cayman Islands</option>
                                                    <option value="Central African Republic">Central African Republic</option>
                                                    <option value="Chad">Chad</option>
                                                    <option value="Chile">Chile</option>
                                                    <option value="China">China</option>
                                                    <option value="Christmas Island">Christmas Island</option>
                                                    <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                                                    <option value="Colombia">Colombia</option>
                                                    <option value="Comoros">Comoros</option>
                                                    <option value="Congo">Congo</option>
                                                    <option value="Congo, the Democratic Republic of the">Congo, the Democratic Republic of the</option>
                                                    <option value="Cook Islands">Cook Islands</option>
                                                    <option value="Costa Rica">Costa Rica</option>
                                                    <option value="Cote d'Ivoire">Cote d'Ivoire</option>
                                                    <option value="Croatia (Hrvatska)">Croatia (Hrvatska)</option>
                                                    <option value="Cuba">Cuba</option>
                                                    <option value="Cyprus">Cyprus</option>
                                                    <option value="Czech Republic">Czech Republic</option>
                                                    <option value="Denmark">Denmark</option>
                                                    <option value="Djibouti">Djibouti</option>
                                                    <option value="Dominica">Dominica</option>
                                                    <option value="Dominican Republic">Dominican Republic</option>
                                                    <option value="East Timor">East Timor</option>
                                                    <option value="Ecuador">Ecuador</option>
                                                    <option value="Egypt">Egypt</option>
                                                    <option value="El Salvador">El Salvador</option>
                                                    <option value="Equatorial Guinea">Equatorial Guinea</option>
                                                    <option value="Eritrea">Eritrea</option>
                                                    <option value="Estonia">Estonia</option>
                                                    <option value="Ethiopia">Ethiopia</option>
                                                    <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                                                    <option value="Faroe Islands">Faroe Islands</option>
                                                    <option value="Fiji">Fiji</option>
                                                    <option value="Finland">Finland</option>
                                                    <option value="France">France</option>
                                                    <option value="France Metropolitan">France Metropolitan</option>
                                                    <option value="French Guiana">French Guiana</option>
                                                    <option value="French Polynesia">French Polynesia</option>
                                                    <option value="French Southern Territories">French Southern Territories</option>
                                                    <option value="Gabon">Gabon</option>
                                                    <option value="Gambia">Gambia</option>
                                                    <option value="Georgia">Georgia</option>
                                                    <option value="Germany">Germany</option>
                                                    <option value="Ghana">Ghana</option>
                                                    <option value="Gibraltar">Gibraltar</option>
                                                    <option value="Greece">Greece</option>
                                                    <option value="Greenland">Greenland</option>
                                                    <option value="Grenada">Grenada</option>
                                                    <option value="Guadeloupe">Guadeloupe</option>
                                                    <option value="Guam">Guam</option>
                                                    <option value="Guatemala">Guatemala</option>
                                                    <option value="Guinea">Guinea</option>
                                                    <option value="Guinea-Bissau">Guinea-Bissau</option>
                                                    <option value="Guyana">Guyana</option>
                                                    <option value="Haiti">Haiti</option>
                                                    <option value="Heard and Mc Donald Islands">Heard and Mc Donald Islands</option>
                                                    <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                                                    <option value="Honduras">Honduras</option>
                                                    <option value="Hong Kong">Hong Kong</option>
                                                    <option value="Hungary">Hungary</option>
                                                    <option value="Iceland">Iceland</option>
                                                    <option value="India">India</option>
                                                    <option value="Indonesia">Indonesia</option>
                                                    <option value="Iran (Islamic Republic of)">Iran (Islamic Republic of)</option>
                                                    <option value="Iraq">Iraq</option>
                                                    <option value="Ireland">Ireland</option>
                                                    <option value="Israel">Israel</option>
                                                    <option value="Italy">Italy</option>
                                                    <option value="Jamaica">Jamaica</option>
                                                    <option value="Japan">Japan</option>
                                                    <option value="Jordan">Jordan</option>
                                                    <option value="Kazakhstan">Kazakhstan</option>
                                                    <option value="Kenya">Kenya</option>
                                                    <option value="Kiribati">Kiribati</option>
                                                    <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
                                                    <option value="Korea, Republic of">Korea, Republic of</option>
                                                    <option value="Kuwait">Kuwait</option>
                                                    <option value="Kyrgyzstan">Kyrgyzstan</option>
                                                    <option value="Lao, People's Democratic Republic">Lao, People's Democratic Republic</option>
                                                    <option value="Latvia">Latvia</option>
                                                    <option value="Lebanon">Lebanon</option>
                                                    <option value="Lesotho">Lesotho</option>
                                                    <option value="Liberia">Liberia</option>
                                                    <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                                                    <option value="Liechtenstein">Liechtenstein</option>
                                                    <option value="Lithuania">Lithuania</option>
                                                    <option value="Luxembourg">Luxembourg</option>
                                                    <option value="Macau">Macau</option>
                                                    <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option>
                                                    <option value="Madagascar">Madagascar</option>
                                                    <option value="Malawi">Malawi</option>
                                                    <option value="Malaysia">Malaysia</option>
                                                    <option value="Maldives">Maldives</option>
                                                    <option value="Mali">Mali</option>
                                                    <option value="Malta">Malta</option>
                                                    <option value="Marshall Islands">Marshall Islands</option>
                                                    <option value="Martinique">Martinique</option>
                                                    <option value="Mauritania">Mauritania</option>
                                                    <option value="Mauritius">Mauritius</option>
                                                    <option value="Mayotte">Mayotte</option>
                                                    <option value="Mexico">Mexico</option>
                                                    <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
                                                    <option value="Moldova, Republic of">Moldova, Republic of</option>
                                                    <option value="Monaco">Monaco</option>
                                                    <option value="Mongolia">Mongolia</option>
                                                    <option value="Montserrat">Montserrat</option>
                                                    <option value="Morocco">Morocco</option>
                                                    <option value="Mozambique">Mozambique</option>
                                                    <option value="Myanmar">Myanmar</option>
                                                    <option value="Namibia">Namibia</option>
                                                    <option value="Nauru">Nauru</option>
                                                    <option value="Nepal">Nepal</option>
                                                    <option value="Netherlands">Netherlands</option>
                                                    <option value="Netherlands Antilles">Netherlands Antilles</option>
                                                    <option value="New Caledonia">New Caledonia</option>
                                                    <option value="New Zealand">New Zealand</option>
                                                    <option value="Nicaragua">Nicaragua</option>
                                                    <option value="Niger">Niger</option>
                                                    <option value="Nigeria">Nigeria</option>
                                                    <option value="Niue">Niue</option>
                                                    <option value="Norfolk Island">Norfolk Island</option>
                                                    <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                                                    <option value="Norway">Norway</option>
                                                    <option value="Oman">Oman</option>
                                                    <option value="Pakistan">Pakistan</option>
                                                    <option value="Palau">Palau</option>
                                                    <option value="Panama">Panama</option>
                                                    <option value="Papua New Guinea">Papua New Guinea</option>
                                                    <option value="Paraguay">Paraguay</option>
                                                    <option value="Peru">Peru</option>
                                                    <option value="Philippines">Philippines</option>
                                                    <option value="Pitcairn">Pitcairn</option>
                                                    <option value="Poland">Poland</option>
                                                    <option value="Portugal">Portugal</option>
                                                    <option value="Puerto Rico">Puerto Rico</option>
                                                    <option value="Qatar">Qatar</option>
                                                    <option value="Reunion">Reunion</option>
                                                    <option value="Romania">Romania</option>
                                                    <option value="Russian Federation">Russian Federation</option>
                                                    <option value="Rwanda">Rwanda</option>
                                                    <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                                    <option value="Saint Lucia">Saint Lucia</option>
                                                    <option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
                                                    <option value="Samoa">Samoa</option>
                                                    <option value="San Marino">San Marino</option>
                                                    <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                                                    <option value="Saudi Arabia">Saudi Arabia</option>
                                                    <option value="Senegal">Senegal</option>
                                                    <option value="Seychelles">Seychelles</option>
                                                    <option value="Sierra Leone">Sierra Leone</option>
                                                    <option value="Singapore">Singapore</option>
                                                    <option value="Slovakia (Slovak Republic)">Slovakia (Slovak Republic)</option>
                                                    <option value="Slovenia">Slovenia</option>
                                                    <option value="Solomon Islands">Solomon Islands</option>
                                                    <option value="Somalia">Somalia</option>
                                                    <option value="South Africa">South Africa</option>
                                                    <option value="South Georgia and the South Sandwich Islands">South Georgia and the South Sandwich Islands</option>
                                                    <option value="Spain">Spain</option>
                                                    <option value="Sri Lanka">Sri Lanka</option>
                                                    <option value="St. Helena">St. Helena</option>
                                                    <option value="St. Pierre and Miquelon">St. Pierre and Miquelon</option>
                                                    <option value="Sudan">Sudan</option>
                                                    <option value="Suriname">Suriname</option>
                                                    <option value="Svalbard and Jan Mayen Islands">Svalbard and Jan Mayen Islands</option>
                                                    <option value="Swaziland">Swaziland</option>
                                                    <option value="Sweden">Sweden</option>
                                                    <option value="Switzerland">Switzerland</option>
                                                    <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                                                    <option value="Taiwan, Province of China">Taiwan, Province of China</option>
                                                    <option value="Tajikistan">Tajikistan</option>
                                                    <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
                                                    <option value="Thailand">Thailand</option>
                                                    <option value="Togo">Togo</option>
                                                    <option value="Tokelau">Tokelau</option>
                                                    <option value="Tonga">Tonga</option>
                                                    <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                                    <option value="Tunisia">Tunisia</option>
                                                    <option value="Turkey">Turkey</option>
                                                    <option value="Turkmenistan">Turkmenistan</option>
                                                    <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                                                    <option value="Tuvalu">Tuvalu</option>
                                                    <option value="Uganda">Uganda</option>
                                                    <option value="Ukraine">Ukraine</option>
                                                    <option value="United Arab Emirates">United Arab Emirates</option>
                                                    <option value="United Kingdom">United Kingdom</option>
                                                    <option value="United States">United States</option>
                                                    <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                                                    <option value="Uruguay">Uruguay</option>
                                                    <option value="Uzbekistan">Uzbekistan</option>
                                                    <option value="Vanuatu">Vanuatu</option>
                                                    <option value="Venezuela">Venezuela</option>
                                                    <option value="Vietnam">Vietnam</option>
                                                    <option value="Virgin Islands (British)">Virgin Islands (British)</option>
                                                    <option value="Virgin Islands (U.S.)">Virgin Islands (U.S.)</option>
                                                    <option value="Wallis and Futuna Islands">Wallis and Futuna Islands</option>
                                                    <option value="Western Sahara">Western Sahara</option>
                                                    <option value="Yemen">Yemen</option>
                                                    <option value="Yugoslavia">Yugoslavia</option>
                                                    <option value="Zambia">Zambia</option>
                                                    <option value="Zimbabwe">Zimbabwe</option>
                                                </select>
                                                <div class="invalid-feedback">This field is required.</div>
                                            </div>
                                            <div class="col-6"><label class="form-label" for="bootstrap-wizard-validation-card-holder-zip-code">Zip</label><input class="form-control" placeholder="1234" name="zipCode" type="text" id="bootstrap-wizard-validation-card-holder-zip-code" required="required" />
                                                <div class="invalid-feedback">This field is required.</div>
                                            </div>
                                            <div class="col-6"><label class="form-label" for="bootstrap-wizard-validation-card-exp-date">Date of Expire</label><input class="form-control" placeholder="15/2024" name="expDate" type="text" id="bootstrap-wizard-validation-card-exp-date" required="required" />
                                                <div class="invalid-feedback">This field is required.</div>
                                            </div>
                                            <div class="col-6"><label class="form-label" for="bootstrap-wizard-validation-card-cvv">CVV</label><input class="form-control" placeholder="123" name="cvv" maxlength="3" pattern="[0-9]{3}" type="number" id="bootstrap-wizard-validation-card-cvv" required="required" />
                                                <div class="invalid-feedback">This field is required.</div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="tab-pane" role="tabpanel" aria-labelledby="bootstrap-wizard-validation-tab4" id="bootstrap-wizard-validation-tab4">
                                    <div class="row flex-center pb-8 pt-4 gx-3 gy-4">
                                        <div class="col-12 col-sm-auto">
                                            <div class="text-center text-sm-start"><img class="d-dark-none" src="{{asset('assets/img/spot-illustrations/38.webp')}}" alt="" width="220" /><img class="d-light-none" src="{{asset('assets/img/spot-illustrations/dark_38.webp')}}" alt="" width="220" /></div>
                                        </div>
                                        <div class="col-12 col-sm-auto">
                                            <div class="text-center text-sm-start">
                                                <h5 class="mb-3">You are all set!</h5>
                                                <p class="text-body-emphasis fs-9">Now you can access your account<br />anytime anywhere</p><a class="btn btn-primary px-6" href="wizard.html">Start Over</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer border-top-0" data-wizard-footer="data-wizard-footer">
                            <div class="d-flex pager wizard list-inline mb-0"><button class="d-none btn btn-link ps-0" type="button" data-wizard-prev-btn="data-wizard-prev-btn"><span class="fas fa-chevron-left me-1" data-fa-transform="shrink-3"></span>Previous</button>
                                <div class="flex-1 text-end"><button class="btn btn-primary px-6 px-sm-6" type="submit" data-wizard-next-btn="data-wizard-next-btn">Next<span class="fas fa-chevron-right ms-1" data-fa-transform="shrink-3"> </span></button></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="error-modal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document" style="max-width: 500px">
            <div class="modal-content position-relative">
                <div class="modal-header border-gray-100 p-3">
                    <div class="h4 text-body-secondary mb-0">Access Denied!</div><button class="btn btn-link text-danger position-absolute top-0 end-0 mt-2 me-2" data-bs-dismiss="modal"><span class="fas fa-times"></span></button>
                </div>
                <div class="modal-body px-4 py-6">
                    <div class="d-flex align-items-center"><img class="me-4" src="{{asset('assets/img/icons/stop.png')}}" alt="" />
                        <div class="flex-1">
                            <p class="mb-0 fw-semibold text-body-tertiary">You do not have the link to access. Please start <br />over to get access for the next session.<br />Thank You!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection