@if(!$post->trashed())
{{-- Hidden --}}
<div class="modal fade" id="hide-post{{ $post->id }}">
    <div class="modal-dialog">
        <div class="modal-content border-danger">
            <div class="modal-header border-danger">
                <h3 class="h4 text-danger"><i clasds="fa-solid fa-user-slash"></i> Hide Post{{ $post->id }}</h3>
            </div>
            <div class="modal-body">
                Are you sure you want to hide this post?
                @if($post->image)
                    <img src="{{ $post->image}}" alt="" class="image-lg d-block mx-auto">
                @else
                    <i class="fa-solid fa-circle-user text-secondary icon-sm align-middle"></i>
                @endif
                <strong>{{ $post->id }}</strong>?

            </div>
            <div class="modal-footer border-0">
                <form action="{{ route('admin.posts.hide', $post->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="button" data-bs-dismiss="modal" class="btn btn-sm btn-outline-danger">Cancel</button>
                    <button type="submit" class="btn btn-sm btn-danger">Hide</button>
                </form>
            </div>
        </div>
    </div>
</div>

@else {{-- Visible --}}
<div class="modal fade" id="visible-post{{ $post->id }}">
    <div class="modal-dialog">
        <div class="modal-content border-danger">
            <div class="modal-header border-danger">
                <i class="fa-solid fa-eye"></i>
                <h3 class="h4 text-success"><i clasds="fa-solid fa-user-check"></i> Unhide Post</h3>
            </div>
            <div class="modal-body">
                Are you sure you want to unhide this post?
                @if($post->image)
                    <img src="{{ $post->image}}" alt="" class="image-lg d-block mx-auto">
                @else
                    <i class="fa-solid fa-circle-user text-secondary icon-sm align-middle"></i>
                @endif
                <strong>{{ $post->id }}</strong>?

            </div>
            <div class="modal-footer border-0">
                <form action="{{ route('admin.posts.visible', $post->id)}}" method="post">
                    @csrf
                    @method('PATCH')
                    <button type="button" data-bs-dismiss="modal" class="btn btn-sm btn-outline-danger">Cancel</button>
                    <button type="submit" class="btn btn-sm btn-danger">Visible</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endif