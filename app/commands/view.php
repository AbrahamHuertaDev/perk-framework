<?php
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;


class ViewMake extends Command
{
    protected $commandName = 'make:view';
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

            $migration = file_get_contents(ROOT . '/core/cached/view.txt');
            $migration = str_replace('{name}', $table, $migration);
            $file =  strtolower($table) . '.blade.php';

            file_put_contents(APP . 'views/' . $file, $migration);

            $output->writeln('Vista ' . $table . ' creada corectamente en app/views/'.$file);

        } else {

        }


    }
}
