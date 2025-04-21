           <div class="table table-striped">
               <table class="table-responsive" id="{{ $table . 'Table' }}" width="100%" cellspacing="0">
                   <thead>
                       <tr>
                           @foreach ($columns as $column)
                               <th>{{ ucfirst(str_replace('_', ' ', $column)) }}</th>
                           @endforeach
                           <th>Actions</th>
                       </tr>
                   </thead>

                   <tfoot>
                       <tr>
                           @foreach ($columns as $column)
                               <th>{{ ucfirst(str_replace('_', ' ', $column)) }}</th>
                           @endforeach
                           <th>Actions</th>
                       </tr>
                   </tfoot>
               </table>
               <!-- Paginasi (hapus karena pakai DataTables) -->
           </div>
