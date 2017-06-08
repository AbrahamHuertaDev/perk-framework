<?php
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;


class ModelMake extends Command
{
    protected $commandName = 'make:model';
    protected $commandDescription = "Greets Someone";

    protected $commandArgumentName = "name";

    protected function configure()
    {
        $this
            ->setName($this->commandName)
            ->addArgument(
                $this->commandArgumentName,
                InputArgument::OPTIONAL
            );
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $name = $input->getArgument($this->commandArgumentName);

        if ($name) {

            $table = $name;

            $migration = file_get_contents(ROOT . '/core/cached/model.txt');
            $migration = str_replace('{name}', $table, $migration);
            $file =  strtolower($table) . '.php';

            file_put_contents(APP . 'models/' . $file, $migration);

            $output->writeln('Modelo ' . $table . ' creada corectamente en app/models/'.$file);

        } else {

        }


    }
}
