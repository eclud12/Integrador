<div class="modal fade" id="modal-update-post-{{$post->id}}">
    <div class="modal-dialog">
        <div class="modal-content bg-default">
            <div class="modal-header">
                <h4 class="modal-title">Actualizar Post</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
            </div>
            <form action="{{ route('admin.posts.update', $post->id) }}" method="POST">
                {{ csrf_field() }}
                <div class="modal-body">
                    <div class="form-group">
                        <label for="title">Post</label>
                        <input type="text" name="title" class="form-control" id="post">
                    </div>
                    <div class="form-group">
                        <label for="Category_id">Categorías</label>
                        <select name="category_id" id="category_id" class="from-control">
                            <option value="">-- Elegir categoría--</option>
                            @foreach ($categories as $category)
                            <option value="{{$category->id}}" <?= $category->id == $post->category->id ? 'select': '' ?> >{{$category->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="content">Contenido</label>
                        <textarea name="content" class="form-control" id="content" cols="30" rows="10">{{$post->content}}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="author">Autor</label>
                        <input type="text" name="author" class="form-control" id="author" value="{{$post->author}}}">
                    </div>
                    <div class="form-group">
                        <label for="featured">imagen principal</label>
                        <input type="file" name="featured" class="form-control" id="featured">
                        <small>imagen actual</small><br>
                        <img src="{{asset($post->feactured)}}" width="80px"  class="img-fluid img-thumbail" alt="{{$post->featured}}">
                    </div>

                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-outline-primary">Guardar</button>
                    </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>