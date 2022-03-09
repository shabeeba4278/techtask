

<html>
    <div class="col s11">
      <div class="row">
        <div class="col s8">
          <div class="tableContainer">
            <table>
              <tbody>
                <tr>
                  <th>ID</th>
                  <th>Title</th>
                  <th>Description</th>
                  <th></th>
                </tr>
                </tbody>
            </table>
          </div>
        </div>
        <div class="col s4">
          <div class="formContainer">
            <form class="col s12" action="{{ route('techwork.store') }}" method="POST">@csrf
              <div class="row">
                <div class="input-field col s6">
                  <input id="firstname" type="text" name="firstname">
                  <label for="firstname">First Name</label>
                </div>                  
                <div class="input-field col s6">
                  <input id="lastname" type="text" name="lastname">
                  <label for="lastname">Last Name</label>
                </div>
              </div>
             </form>
          </div>
        </div>
      </div>
  </div>
</html>