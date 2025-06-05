	<!-- Newsletter -->

	<div class="newsletter">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="newsletter_container d-flex flex-lg-row flex-column align-items-lg-center align-items-center justify-content-lg-start justify-content-center">
						<div class="newsletter_title_container">
							<div class="newsletter_icon"><img src="{{ asset('assets/images/send.png') }}" alt=""></div>
							<div class="newsletter_title">Sign up for Newsletter</div>
							<div class="newsletter_text"><p>...and receive %20 coupon for first shopping.</p></div>
						</div>
						<div class="newsletter_content clearfix">
							<form id="subscriberForm" class="newsletter_form">
								@csrf
								<input type="email" class="newsletter_input" name="email" required placeholder="Enter your email address">
								<p class="email-error" style="color: red; display: none;"></p>
								<button type="submit" class="newsletter_button">Subscribe</button>
							</form>
							<div class="newsletter_unsubscribe_link"><a href="#">unsubscribe</a></div>
							<p id="subscriberSuccess" style="color: black; display: none;"></p>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>


@push('scripts')
<!-- SweetAlert2 -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    $(document).ready(function () {
        $('#subscriberForm').submit(function (e) {
            e.preventDefault(); // Prevent form reload

            let formData = $(this).serialize();
            let url = "{{ route('admin.subscriber.store') }}";

            $('.email-error').hide();

            $.ajax({
                type: 'POST',
                url: url,
                data: formData,
                headers: {
                    'X-CSRF-TOKEN': $('input[name="_token"]').val()
                },
                success: function (response) {
                    Swal.fire({
                        icon: 'success',
                        title: 'Subscribed!',
                        text: 'You have successfully subscribed to our newsletter.',
                        confirmButtonColor: '#3c3938'
                    });
                    $('#subscriberForm')[0].reset();
                },
                error: function (xhr) {
                    if (xhr.status === 422) {
                        let errors = xhr.responseJSON.errors;
                        if (errors.email) {
                            Swal.fire({
                                icon: 'error',
                                title: 'Oops...',
                                text: errors.email[0],
                                confirmButtonColor: '#dc3545'
                            });
                        }
                    } else {
                        Swal.fire({
                            icon: 'error',
                            title: 'Something went wrong',
                            text: 'Please try again later.',
                            confirmButtonColor: '#3c3938'
                        });
                    }
                }
            });
        });
    });
</script>
@endpush