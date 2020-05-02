<?php 

namespace AhmetDGR;

use pocketmine\plugin\PluginBase;
use pocketmine\plugin\Plugin;
use pocketmine\Server;
use pocketmine\Player;
use pocketmine\command\Command;

use pocketmine\event\Listener;
use pocketmine\command\CommandSender;
use pocketmine\level\sound\{
	FizzSound,
	AnvilBreakSound,
	AnvilFallSound,
	AnvilUseSound,
	BlazeShootSound,
	ClickSound,
	DoorBumpSound,
	DoorCrashSound,
	DoorSound,
	EndermanTeleportSound,
	GhastShootSound,
	GhastSound,
	LaunchSound,
	NoteBlockSound,
	PlaySound,
	PopSound
};
use pocketmine\math\Vector3;

class PocketSounds extends PluginBase implements Listener
{

	public function onEnable()
	{
		$this->getServer()->getPluginManager()->registerEvents($this, $this);
	}


	public function onCommand(CommandSender $sender, Command $kmt, string $label, array $args): bool
	{
		switch ($kmt->getName()) {
			case "sounds":
			$this->SoundMenu($sender);
		}
		return true;
	}


	public function SoundMenu($sender)
	{
		$plugin = $this->getServer()->getPluginManager();
		$formapi = $plugin->getPlugin("FormAPI");
		$form = $formapi->createSimpleForm(function (Player $sender, $data = null) {
			if ($data === null) {
				return true;
			}
			switch ($data) {
				case 0:
				$sender->getLevel()->addSound(new FizzSound(new Vector3($sender->getX(), $sender->getY(), $sender->getZ())));
				break;
				case 1:
				$sender->getLevel()->addSound(new AnvilBreakSound(new Vector3($sender->getX(), $sender->getY(), $sender->getZ())));
				break;
				case 2:
				$sender->getLevel()->addSound(new AnvilFallSound(new Vector3($sender->getX(), $sender->getY(), $sender->getZ())));
				break;
				case 3:
				$sender->getLevel()->addSound(new AnvilUseSound(new Vector3($sender->getX(), $sender->getY(), $sender->getZ())));
				break;
				case 4:
				$sender->getLevel()->addSound(new BlazeShootSound(new Vector3($sender->getX(), $sender->getY(), $sender->getZ())));
				break;
				case 5:
				$sender->getLevel()->addSound(new ClickSound(new Vector3($sender->getX(), $sender->getY(), $sender->getZ())));
				break;
				case 6:
				$sender->getLevel()->addSound(new DoorBumpSound(new Vector3($sender->getX(), $sender->getY(), $sender->getZ())));
				break;
				case 7:
				$sender->getLevel()->addSound(new DoorCrashSound(new Vector3($sender->getX(), $sender->getY(), $sender->getZ())));
				break;
				case 8:
				$sender->getLevel()->addSound(new DoorSound(new Vector3($sender->getX(), $sender->getY(), $sender->getZ())));
				break;
				case 9:
				$sender->getLevel()->addSound(new EndermanTeleportSound(new Vector3($sender->getX(), $sender->getY(), $sender->getZ())));
				break;
				case 10:
				$sender->getLevel()->addSound(new GhastShootSound(new Vector3($sender->getX(), $sender->getY(), $sender->getZ())));
				break;
				case 11:
				$sender->getLevel()->addSound(new GhastSound(new Vector3($sender->getX(), $sender->getY(), $sender->getZ())));
				break;
				case 12:
				$sender->getLevel()->addSound(new LaunchSound(new Vector3($sender->getX(), $sender->getY(), $sender->getZ())));
				break;
				case 13:
				$sender->getLevel()->addSound(new NoteBlockSound(new Vector3($sender->getX(), $sender->getY(), $sender->getZ())));
				break;
				case 14:
				$sender->getLevel()->addSound(new PopSound(new Vector3($sender->getX(), $sender->getY(), $sender->getZ())));
				break;
			}
		});
		$form->setTitle("Pocket Sounds");
		$form->addButton("FizzSound");
		$form->addButton("AnvilBreakSound");
		$form->addButton("AnvilFallSound");
		$form->addButton("AnvilUseSound");
		$form->addButton("BlazeShootSound");
		$form->addButton("ClickSound");
		$form->addButton("DoorBumpSound");
		$form->addButton("DoorCrashSound");
		$form->addButton("DoorSound");
		$form->addButton("EndermanTeleportSound");
		$form->addButton("GhastShootSound");
		$form->addButton("GhastSound");
		$form->addButton("LaunchSound");
		$form->addButton("NoteBlockSound");
		$form->addButton("PopSound");
		$form->sendToPlayer($sender);
	}




}

?>