<!DOCTYPE html>
<html>
<head>
    <title>Page Title</title>
</head>
<body>

<form method="POST" action="/articles">
    @csrf
    <div class="field">
        <label class="label" for="title">Title</label>

        <div class="control">
            <input class="input @error('title') clasa-de-marcat-cu-rosu @enderror" type="text"  name="title" id="title" value="{{old('title')}}">
            @error('title')
            <p>{{$errors->first('title')}}</p>
            @enderror
        </div>
    </div>

    <div class="field">
        <label class="label" for="body">Body</label>

        <div class="control">
            <textarea class="textarea" name="body" id="body"></textarea>
        </div>
    </div>
    <div class="field is-grouped">
        <div class="control">
            <button class="button is-link" type="submit">Submit</button>
        </div>
    </div>
</form>


</body>
</html>
