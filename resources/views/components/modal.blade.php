<div>
    <div class="modal fade" id="{{ $idModal }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog-centered modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">{{ $titleModal }}</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ $actionModal }}" method="post" class="edit-form {{ $classForm }}" enctype="multipart/form-data">

                    <div class="modal-body">

                        @csrf

                        {{ $bodyModal }}


                    </div>
                    <div class="modal-footer">

                        {{ $footerModal }}
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>