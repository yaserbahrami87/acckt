<div>
    <!-- Author -->
    <section class="mb-4">

        <hr class="mt-4">
        <p class="font-weight-bold dark-grey-text text-center spacing">
            <strong>درباره ی ما</strong>
        </p>
        <hr>

        <!-- Avatar -->
        <div class="flex-center mt-4">
            <img src="{{$profile_image ?? 'http://yazdanbabazade.parsaspace.com/images/451-4517876_default-profile-hd-png-download.jpg'}}" class="img-fluid img-author" style="border-radius: 50%;width: 50%">
        </div>

        <!-- Description -->
        <p class="mt-3 dark-grey-text font-small text-center">
            <em>{{Str::limit($info->about_me ?? '',150)}}</em>
        </p>

        <ul class="list-unstyled d-flex circle-icons flex-center">
            <!-- Facebook -->
            <li>
                <a class="fb-ic">
                    <i class="fab fa-facebook-f"> </i>
                </a>
            </li>
            <!-- Twitter -->
            <li>
                <a class="tw-ic">
                    <i class="fab fa-twitter"> </i>
                </a>
            </li>
            <!-- Google + -->
            <li>
                <a class="gplus-ic">
                    <i class="fab fa-google-plus-g"> </i>
                </a>
            </li>
        </ul>

    </section>
    <!-- Author -->
</div>
