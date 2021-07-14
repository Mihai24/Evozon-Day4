<?php


namespace Entity;


class FileWrapper
{
    private string $fileName;

    public function __construct(string $fileName)
    {
        $this->fileName = $fileName;
    }

    /**
     * @return string
     */
    public function getFileName(): string
    {
        return $this->fileName;
    }

    /**
     * @throws \Exception
     */
    public function readFile(): string
    {
        if (!file_exists($this->getFileName()))
        {
            throw new \Exception(
                sprintf(
                'File %s not found', $this->getFileName()
            ));
        }

        $file = fopen($this->getFileName(), 'r');

        if (!$file)
        {
            throw new \Exception(
                sprintf(
                    'Could not open file %s', $this->getFileName()
            ));
        }

        while (!feof($file))
        {
            $fileWarriors = fgets($file);
        }

        fclose($file);

        return $fileWarriors;
    }

    /**
     * @throws \Exception
     */
    public function writeToFile(string $serializedWarriors): void
    {
        if (!file_exists($this->getFileName()))
        {
            throw new \Exception(
                sprintf(
                    'File %s not found', $this->getFileName()
                ));
        }

        $file = fopen($this->getFileName(), 'r');

        if (!$file)
        {
            throw new \Exception(
                sprintf(
                    'Could not open file %s', $this->getFileName()
                ));
        }

        file_put_contents($this->getFileName(), $serializedWarriors);

        fclose($file);

        echo 'Success! Warriors are added to the file.';
    }
}