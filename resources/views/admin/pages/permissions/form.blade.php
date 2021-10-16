<!-- Modal -->
<div class="modal fade" id="form" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header border-bottom-0">
                <h5 class="modal-title" id="form_label">{{ __('label.pages.permission.form') }}
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
                    <input type="hidden" name="permission_id" id="permission_id">
                    <!-- Form Group (Name)-->
                    <div class="mb-3">
                        <label class="small mb-1" for="display_name">{{ __('label.form.display_name') }}</label>
                        <input class="form-control" id="display_name" name="display_name" type="text"
                            placeholder="Enter display name of permission" required>
                        <span id="displayNameError" class="d-block"></span>
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
