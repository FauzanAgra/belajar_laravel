@extends('layouts.main')

@section('container')
<h1>Halaman About</h1>
<h3>{{ $name }}</h3>
<p>{{ $email }}</p>
<img src="image/{{ $image }}" alt="{{ $name }}" width="200" class="img-thumbnail rounded-circle ">  
<img src="" class="" alt="" srcset=""> 
@endsection

{{-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi voluptatem, error amet dignissimos magnam alias reiciendis non, sapiente quaerat voluptates placeat cum incidunt. A, ut. Nam illo non corporis, illum expedita sapiente, odio porro recusandae nemo sed repellendus.</p><p>Veritatis at earum aliquam deserunt dolor? Perspiciatis suscipit quasi tempora voluptatibus esse, veniam, explicabo, eveniet alias repudiandae id consequuntur cumque autem totam consequatur ab ut! Et recusandae a omnis accusantium laboriosam, rem natus neque, at officia, possimus enim veniam earum.</p><p>Beatae doloremque recusandae nisi adipisci, quos quod quidem neque at. Quia, aliquam unde voluptatum iure ipsam ad modi? Expedita a minus dolor dolore natus tempore labore! Repellat blanditiis odio autem labore animi earum, totam nobis molestiae laudantium illum, doloremque cumque architecto tempora.</p> --}}


{{-- Post::create([
    'title' => 'Judul Ke Tiga',
    'slug' => 'judul-ke-tiga',
    'excerpt' => 'Lorem ipsum ke tiga',
    'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi voluptatem, error amet dignissimos magnam alias reiciendis non, sapiente quaerat voluptates placeat cum incidunt. A, ut. Nam illo non corporis, illum expedita sapiente, odio porro recusandae nemo sed repellendus.</p><p>Veritatis at earum aliquam deserunt dolor? Perspiciatis suscipit quasi tempora voluptatibus esse, veniam, explicabo, eveniet alias repudiandae id consequuntur cumque autem totam consequatur ab ut! Et recusandae a omnis accusantium laboriosam, rem natus neque, at officia, possimus enim veniam earum.</p><p>Beatae doloremque recusandae nisi adipisci, quos quod quidem neque at. Quia, aliquam unde voluptatum iure ipsam ad modi? Expedita a minus dolor dolore natus tempore labore! Repellat blanditiis odio autem labore animi earum, totam nobis molestiae laudantium illum, doloremque cumque architecto tempora.</p>'
]) --}}
