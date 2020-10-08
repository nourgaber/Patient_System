CREATE TABLE `Patients` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`username` VARCHAR(50) NOT NULL UNIQUE,
	`first_name` VARCHAR(50) NOT NULL,
	`last_name` VARCHAR(50) NOT NULL,
	`email` VARCHAR(50) NOT NULL UNIQUE,
	`mobile` VARCHAR(50) NOT NULL UNIQUE,
	`birth_date` DATETIME NOT NULL UNIQUE,
	`gender` VARCHAR(10) NOT NULL,
	`country` VARCHAR(30) NOT NULL,
	`occupation` VARCHAR(100),
	`pain_type_id` INT NOT NULL,
	`created_at` DATETIME,
	`updated_at` DATETIME,
	PRIMARY KEY (`id`)
);

CREATE TABLE `Doctors` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`specialization_id` INT NOT NULL,
	`name` VARCHAR(255),
	PRIMARY KEY (`id`)
);

CREATE TABLE `Appointments` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`patient_id` INT NOT NULL,
	`doctor_id` INT NOT NULL,
	`accepted_by_doctor` BOOLEAN NOT NULL,
	`accepted_by_patient` BOOLEAN NOT NULL,
	`is_deleted` BOOLEAN NOT NULL,
	`created_at` DATETIME,
	`updated_at` DATETIME,
	PRIMARY KEY (`id`)
);

CREATE TABLE `Specializations` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`name` VARCHAR(255) NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `Pain_types` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`specialization_id` INT NOT NULL,
	`name` VARCHAR(50) NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `Admin` (
	`name` VARCHAR(20) NOT NULL,
	`id` INT(20) NOT NULL AUTO_INCREMENT,
	`password` VARCHAR(20) NOT NULL,
	PRIMARY KEY (`id`)
);

ALTER TABLE `Patients` ADD CONSTRAINT `Patients_fk0` FOREIGN KEY (`pain_type_id`) REFERENCES `Pain_types`(`id`);

ALTER TABLE `Doctors` ADD CONSTRAINT `Doctors_fk0` FOREIGN KEY (`specialization_id`) REFERENCES `Specializations`(`id`);

ALTER TABLE `Appointments` ADD CONSTRAINT `Appointments_fk0` FOREIGN KEY (`patient_id`) REFERENCES `Patients`(`id`);

ALTER TABLE `Appointments` ADD CONSTRAINT `Appointments_fk1` FOREIGN KEY (`doctor_id`) REFERENCES `Doctors`(`id`);

ALTER TABLE `Pain_types` ADD CONSTRAINT `Pain_types_fk0` FOREIGN KEY (`specialization_id`) REFERENCES `Specializations`(`id`);

