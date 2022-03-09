<x-app-layout>
  <x-slot name="header">{{ __('Tasks') }}</x-slot>
  <x-slot name="sidemenu">
      <ul>
          <li><a href="#"><i class="material-icons">person</i></a></li>
      </ul>>
  </x-slot>

  
  <div class="col s11">
      <div class="row">
        <div class="col s8">
          <div class="tableContainer">
            <table>
              <thead>
                <tr>
                <th style="width:25%"></th>
                  <th style="width:5%">ID</th>
                  <th>Title</th>
                  <th>Description</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                @foreach ($lists as $item)
                            <tr>
                              <td>{{ $item->id }}</td>
                              <td>{{ $item->title }}</td>
                              <td>{{ $item->description }}</td>
                            </tr>
                            @endforeach
                        </tbody>
            </table>
          </div>
        </div>
      </div>
  </div>
  <a href="{{url('/techwork/add')}}">add data</a>
</x-app-layout>