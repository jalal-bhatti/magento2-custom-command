<?php
namespace JB\CustomCommand\Console\Command;
 
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
 
class CustomCommand extends Command
{
 
    public const NAME_ARGUMENT = "name";
    public const NAME_OPTION = "option";
 
    protected function execute(
        InputInterface  $input,
        OutputInterface $output
    )
    {
        $name = $input->getArgument(self::NAME_ARGUMENT);
        $option = $input->getOption(self::NAME_OPTION);
        $output->writeln("Wellcome To Magento " . $name);
    }
 
    protected function configure()
    {
        $this->setName("jb_customcommand:wellcome");
        $this->setDescription("custom magento command");
        $this->setDefinition([
            new InputArgument(self::NAME_ARGUMENT, InputArgument::OPTIONAL, "Name"),
            new InputOption(self::NAME_OPTION, "-a", InputOption::VALUE_NONE, "Option functionality")
        ]);
        parent::configure();
    }
}