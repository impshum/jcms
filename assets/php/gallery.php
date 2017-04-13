<?php

/**
 * Description of Gallery
 *
 * @author Tommy Vercety
 */
class Gallery {

	public $path, $result;

	public function __construct() {
		$this->path = 'gallery' . DIRECTORY_SEPARATOR . 'images';
	}

	public function setPath($path) {

		if(substr($path, -1) === '/') {
			$path = substr($path, 0, -1);
		}

		$this->path = $path;
	}

	private function getDirectory($path) {
		return scandir($path);
	}

	public function getImages($extensions = array('jpg', 'png')) {
		$images = $this->getDirectory($this->path);

		foreach ($images as $index => $image) {

			$explode = explode('.', $image);
			$extension = strtolower(end($explode));

			if(!in_array($extension, $extensions)) {
				unset($images[$index]);
			} else {
				$this->result[$index] = array(
					'full'	=> $this->path . DIRECTORY_SEPARATOR . $image,
					'thumb'	=> $this->path . DIRECTORY_SEPARATOR . 'thumbs' . DIRECTORY_SEPARATOR . $image
					);
			}
		}

		return (count($this->result)) ? $this->result : FALSE;
	}
}
?>
