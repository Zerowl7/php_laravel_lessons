
  <div class="form_g">
    <input type="text" class="form-control" name="title" required value="{{ old('title') ?? $post->title ?? ''}}">
  </div>
  <div class="form_g">
    <textarea name="descr" rows="7" class="form-control" required {{ old('descr') ?? $post->descr ?? ''}}></textarea>
  </div>
  <div class="form_g">
  <input type="file" name="img">
  </div>