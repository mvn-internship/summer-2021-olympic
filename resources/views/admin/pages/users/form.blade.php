<!-- Modal -->
<div class="modal fade" id="form" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header border-bottom-0">
                <h5 class="modal-title" id="form_label">{{ __('label.pages.user.form') }}
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="card mb-4 border-bottom-danger d-none">
                <div class="card-body" id="error"></div>
            </div>
            <form method="POST" action="">
                @csrf
                <div class="modal-body">
                    <input type="hidden" name="user_id" id="user_id">
                    <!-- Form Row-->
                    <div class="row gx-3 mb-3">
                        <!-- Form Group (name)-->
                        <div class="col-md-6">
                            <label class="small mb-1" for="name">{{ __('label.form.name') }}</label>
                            <input class="form-control" id="name" name="name" type="text"
                                placeholder="Enter user name" required>
                            <span id="nameError" class="d-block"></span>
                        </div>
                        <!-- Form Group (email)-->
                        <div class="col-md-6">
                            <label class="small mb-1" for="email">{{ __('label.form.email') }}</label>
                            <input class="form-control" id="email" name="email" type="email"
                                placeholder="Enter your email" required>
                            <span id="emailError" class="d-block"></span>
                        </div>
                    </div>
                    <!-- Form Row-->
                    <div class="row gx-3 mb-3">
                        <!-- Form Group (phone)-->
                        <div class="col-md-6">
                            <label class="small mb-1" for="phone">{{ __('label.form.phone') }}</label>
                            <input class="form-control" id="phone" name="phone" type="tel"
                                placeholder="Enter user phone number" required>
                            <span id="phoneError" class="d-block"></span>
                        </div>
                        <!-- Form Group (password)-->
                        <div class="col-md-6">
                            <label class="small mb-1" for="password">{{ __('label.form.password') }}</label>
                            <input class="form-control" id="password" name="password" type="password"
                                placeholder="Enter your password">
                            <span id="passwordError" class="d-block"></span>
                        </div>
                    </div>
                    <!-- Form Group (address)-->
                    <div class="mb-3">
                        <label class="small mb-1" for="address">{{ __('label.form.address') }}</label>
                        <input class="form-control" id="address" name="address" type="text"
                            placeholder="Enter your email address" required>
                        <span id="addressError" class="d-block"></span>
                    </div>
                    <div class="mb-3">
                        <label class="d-block small mb-1">{{ __('label.form.role') }}</label>
                        <select id="roles" name="roles[]" multiple="multiple">
                        </select>
                        <span id="roleError" class="d-block"></span>
                    </div>
                </div>
            </form>
            <div class="modal-footer border-top-0 d-flex">
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button"
                        data-dismiss="modal">{{ __('label.form.close') }}</button>
                    <button id="save" class="btn btn-primary" type="button">{{ __('label.form.save') }}</button>
                </div>
            </div>
        </div>

    </div>
</div>
