<html>
<div class="formContainer">
            <form class="col s12" action="{{ route('techwork.store') }}" method="POST">@csrf
              <div class="row">
                <div class="input-field col s6">
                  <input id="title" type="text" name="title"  >
                  <label for="title">Title</label>
                </div>                  
                <div class="input-field col s6">
                  <textarea id="description" name="description"  ></textarea>
                  <label for="description">Description</label>
                </div>
              </div>
              <div class="row">
                <div class="input-field col s12">
                  <button class="btn waves-effect waves-light right" type="submit" name="action">Submit<i class="material-icons right"></i></button>
                </div>
              </div>
            </form>
          </div>
          </html>
