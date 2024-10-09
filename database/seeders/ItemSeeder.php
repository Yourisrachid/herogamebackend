<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Item;

class ItemSeeder extends Seeder
{
    public function run()
    {
        Item::create(['name' => 'Sword', 'description' => 'A sharp blade for close combat.']);
        Item::create(['name' => 'Magic Wand', 'description' => 'A wand infused with magical powers.']);
        Item::create(['name' => 'Healing Potion', 'description' => 'Restores health when consumed.']);
        Item::create(['name' => 'Shield', 'description' => 'Provides protection against attacks.']);
        Item::create(['name' => 'Bow', 'description' => 'A ranged weapon for shooting arrows.']);
        Item::create(['name' => 'Arrows', 'description' => 'Ammunition for bows, can be used to attack from a distance.']);
        Item::create(['name' => 'Fire Spellbook', 'description' => 'Contains spells that cast fire-based magic.']);
        Item::create(['name' => 'Ice Dagger', 'description' => 'A dagger imbued with ice magic to freeze enemies.']);
        Item::create(['name' => 'Health Elixir', 'description' => 'Restores a significant amount of health when used.']);
        Item::create(['name' => 'Mana Potion', 'description' => 'Replenishes mana for casting spells.']);
        Item::create(['name' => 'Leather Armor', 'description' => 'Basic armor that offers light protection.']);
        Item::create(['name' => 'Chainmail Armor', 'description' => 'Offers moderate protection against physical attacks.']);
        Item::create(['name' => 'Invisibility Cloak', 'description' => 'Grants temporary invisibility when worn.']);
        Item::create(['name' => 'Teleportation Scroll', 'description' => 'Allows the user to teleport to a known location.']);
        Item::create(['name' => 'Strength Potion', 'description' => 'Temporarily increases physical strength.']);
        Item::create(['name' => 'Magic Ring', 'description' => 'Enhances the wearer’s magical abilities.']);
        Item::create(['name' => 'Enchanted Boots', 'description' => 'Increases speed and agility.']);
        Item::create(['name' => 'Poison Dagger', 'description' => 'A dagger coated with a potent poison.']);
        Item::create(['name' => 'Phoenix Feather', 'description' => 'A rare item that can revive a fallen ally.']);
        Item::create(['name' => 'Dragon Scale Shield', 'description' => 'A shield made from the scales of a dragon, offers exceptional protection.']);
        Item::create(['name' => 'Thunder Axe', 'description' => 'An axe that channels the power of lightning.']);
        Item::create(['name' => 'Crystal Ball', 'description' => 'Allows the user to see distant places or predict the future.']);
        Item::create(['name' => 'Dark Amulet', 'description' => 'Increases the user’s resistance to dark magic.']);
        Item::create(['name' => 'Light Bracers', 'description' => 'Bracers that enhance the wearer’s light-based spells.']);
        Item::create(['name' => 'Wind Blade', 'description' => 'A sword that slices through air, allowing for quick attacks.']);
        Item::create(['name' => 'Earth Hammer', 'description' => 'A hammer that can cause earthquakes with each strike.']);
        Item::create(['name' => 'Water Staff', 'description' => 'A staff that can control and manipulate water.']);
        Item::create(['name' => 'Time Sandglass', 'description' => 'Temporarily slows down time for everything except the user.']);
        Item::create(['name' => 'Necromancer’s Tome', 'description' => 'A book of dark spells used to raise the dead.']);
    }
}
