<x-template-layout>
  <h2 class="font-semiibold text-xl text-gray-800 leading-tight"></h2>
    <div class="rounded-tl-3xl bg-gradient-to-r from-orange-400 to-red-300 p-4 shadow text-1xl text-black">
     <i class="fas fa-bars">&nbsp &nbsp{{$title}}</i> &nbsp

     <div class="shadow px-6 py-4 bg-white rounded sm:px-1 sm:py-1 sm:br-gray-100">
      <div class="grid grid-cols-12">
        <div class="col-span-6 p-4">
            <a href="{{route('berita.create')}}"><button class="sm:px-1 sm:py-1 sm:br-purple-200 
              hover:text-white hover:bg-purple-600 hover:border-transparent focus:outline-none">Tambah
              <i class="fas fa-plus-square"></i>
              <button>
            </a>
          </div>
        </div>
      </div>
 
  
<div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">

  <table class="min-w-full divide-y divide-gray-200">
            <tr>
              <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Tandai</th>
              <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">No</th>
              <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nama</th>
              <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Jabatan</th>
              <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Keterangan</th>
              <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Aksi</th>
            </tr>
            <!-- More items... -->
            <?php $no = 1; ?>
            @foreach ($berita as $item)
            <tr >
              <td class="px-6 py-4 whitespace-nowrap"><input type="checkbox" name="" id="" w-1></td>
              <td class="px-6 py-4 whitespace-nowrap">{{$no}}</td>
              <td class="px-6 py-4 whitespace-nowrap">{{$item->nama}}</td>
              <td class="px-6 py-4 whitespace-nowrap">{{$item->jabatan}}</td>
              <td class="px-6 py-4 whitespace-nowrap">{{$item->keterangan}}</td>
              <td class="px-6 py-4 whitespace-nowrap">
                <button class="sm:px-1 sm:py-1 sm:br-purple-200 
                  hover:text-white hover:bg-green-600 hover:border-transparent focus:outline-none">
                  <a href="{{route('berita.edit',$item->id)}}" class="text-red">
                    <i class="fas fa-edit"></i>Edit
                  </a></button> |
                  <form action="{{route('berita.destroy', $item->id)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="sm:px-1 sm:py-1 sm:br-purpl600 
                    hover:text-white hover:bg-red-600 hover:border-transparent focus:outline-none"><i class="far fa-trash-alt"></i>Hapus</button>
                  </form>  
              </td>
            </tr>
            <?php $no++; ?>
            @endforeach
        </table>
        
      
    </div>
  </div>
</x-template-layout>