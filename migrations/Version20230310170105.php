<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230310170105 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE registroentrada (id INT AUTO_INCREMENT NOT NULL, objetosalmacen_id INT DEFAULT NULL, user_id INT DEFAULT NULL, fecha DATETIME NOT NULL, cantidad INT NOT NULL, INDEX IDX_ACD5365FD77BC3B4 (objetosalmacen_id), INDEX IDX_ACD5365FA76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE registroentrada ADD CONSTRAINT FK_ACD5365FD77BC3B4 FOREIGN KEY (objetosalmacen_id) REFERENCES objetosalmacen (id)');
        $this->addSql('ALTER TABLE registroentrada ADD CONSTRAINT FK_ACD5365FA76ED395 FOREIGN KEY (user_id) REFERENCES `user` (id)');
        $this->addSql('ALTER TABLE objetosalmacen CHANGE ubicacion ubicacion VARCHAR(255) DEFAULT NULL, CHANGE entradaalmacen entradaalmacen DATETIME DEFAULT NULL, CHANGE salidaalmacen salidaalmacen DATETIME DEFAULT NULL');
        $this->addSql('ALTER TABLE user CHANGE roles roles JSON NOT NULL, CHANGE email email VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE messenger_messages CHANGE delivered_at delivered_at DATETIME DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE registroentrada DROP FOREIGN KEY FK_ACD5365FD77BC3B4');
        $this->addSql('ALTER TABLE registroentrada DROP FOREIGN KEY FK_ACD5365FA76ED395');
        $this->addSql('DROP TABLE registroentrada');
        $this->addSql('ALTER TABLE messenger_messages CHANGE delivered_at delivered_at DATETIME DEFAULT \'NULL\'');
        $this->addSql('ALTER TABLE objetosalmacen CHANGE ubicacion ubicacion VARCHAR(255) DEFAULT \'NULL\', CHANGE entradaalmacen entradaalmacen DATETIME DEFAULT \'NULL\', CHANGE salidaalmacen salidaalmacen DATETIME DEFAULT \'NULL\'');
        $this->addSql('ALTER TABLE `user` CHANGE roles roles LONGTEXT NOT NULL COLLATE `utf8mb4_bin`, CHANGE email email VARCHAR(255) DEFAULT \'NULL\'');
    }
}
