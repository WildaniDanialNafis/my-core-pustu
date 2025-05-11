<label for="pencarian" class="d-block mt-2">Pencarian</label>
<input type="text" name="pencarian" id="pencarian" class="form-control mt-2" placeholder="Cari...">

<div class="table table-striped">
    <table class="table-responsive" id="{{ $table . 'Table' }}" width="100%" cellspacing="0">
        <thead>
            <tr>
                
            </tr>
        </thead>

        {{-- <tfoot>
                       <tr>
                           @foreach ($columns as $column)
                               <th>{{ ucfirst(str_replace('_', ' ', $column)) }}</th>
                           @endforeach
                           <th>Actions</th>
                       </tr>
                   </tfoot> --}}
    </table>
</div>
