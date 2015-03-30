<?php namespace UAParser;

class FileLoadException extends \Exception{}

class FileLoader {

    private $extensions;

    public function __construct(array $extensions = array('yml', 'yaml'))
    {
        $this->extensions = $extensions;
    }

    /**
     * @param $patchFile
     * @return array
     */
    private function loadDirectory($patchFile)
    {
        $extensions = implode('|', $this->extensions);

        $files = array();

        foreach(new \RecursiveIteratorIterator(new \RecursiveDirectoryIterator($patchFile, \RecursiveDirectoryIterator::SKIP_DOTS)) as $file)
        {
            if(preg_match("/\.($extensions)/", $file))
            {
                $files[] = $file;
            }
        }

        return $files;
    }

    /**
     * @param $patchFile
     * @return string
     * @throws FileLoadException
     */
    private function readFile($patchFile)
    {
        $contents = @file_get_contents($patchFile);

        if(!$contents)
        {
            throw new FileLoadException("Could not load file $patchFile");
        }

        return $contents;
    }

    /**
     * @param $patchFile
     * @throws \Exception
     */
    private function checkFileIsValid($patchFile)
    {
        if(!preg_match('/^http(s)?:\/\//', $patchFile) && !is_file($patchFile))
        {
            throw new FileLoadException('Path ' . $patchFile . ' is not a file or directory');
        }
    }

    /**
     * @param $patchFile
     * @param array $files
     * @return array
     * @throws \Exception
     */
    private function loadInternal($patchFile, &$files = array())
    {
        if(is_dir($patchFile))
        {
            foreach($this->loadDirectory($patchFile) as $file)
            {
                $this->loadInternal($file, $files);
            }
        }

        $this->checkFileIsValid($patchFile);

        $files[$patchFile] = $this->readFile($patchFile);

        return $files;
    }

    /**
     * @param $patchFile
     * @return array
     * @throws \Exception
     */
    public function load($patchFile)
    {
        return $this->loadInternal($patchFile);
    }
}
