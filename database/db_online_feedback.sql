CREATE TABLE tbl_catagory (
    int_cat_id int(5) NOT NULL AUTO_INCREMENT,
  	 txt_cat varchar(10) NOT NULL,
   txt_created_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (int_cat_id)
);

CREATE TABLE `tbl_city` (
  `int_city_id` int(5) NOT NULL AUTO_INCREMENT,
  `int_cat_id` int(5) NOT NULL,
  `txt_city` varchar(10) NOT NULL,
  `txt_region` varchar(10) DEFAULT NULL,
  `txt_created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`int_city_id`),
  KEY `int_cat_id` (`int_cat_id`),
  CONSTRAINT `tbl_city_ibfk_1` FOREIGN KEY (`int_cat_id`) REFERENCES `tbl_catagory` (`int_cat_id`)
);

CREATE TABLE `tbl_SPOC` (
  `int_cord_id` int(5) NOT NULL AUTO_INCREMENT,
  `txt_cord` varchar(225) NOT NULL,
  `txt_email` varchar(225) NOT NULL,
  `txt_pwd` varchar(225) NOT NULL,
  `txt_created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`int_cord_id`)
);

CREATE TABLE `tbl_course` (
  `int_course_id` int(5) NOT NULL AUTO_INCREMENT,
  `txt_course` varchar(10) NOT NULL,
  `txt_created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`int_course_id`)
);

CREATE TABLE `tbl_cm` (
  `int_cm_id` int(5) NOT NULL AUTO_INCREMENT,
  `int_city_id` int(5) NOT NULL,
  `int_cord_id` int(5) NOT NULL,
  `int_cord_id_l1` int(5) NOT NULL,
  `int_cord_id_l2` int(5) DEFAULT '0',
  `int_cord_id_l3` int(5) DEFAULT '0',
  `txt_created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`int_cm_id`),
  KEY `int_city_id` (`int_city_id`),
  KEY `int_cord_id_l1` (`int_cord_id_l1`),
  KEY `int_cord_id_l2` (`int_cord_id_l2`),
  KEY `int_cord_id_l3` (`int_cord_id_l3`),
  CONSTRAINT `tbl_cm_ibfk_1` FOREIGN KEY (`int_city_id`) REFERENCES `tbl_city` (`int_city_id`),
  CONSTRAINT `tbl_cm_ibfk_2` FOREIGN KEY (`int_cord_id_l1`) REFERENCES `tbl_SPOC` (`int_cord_id`),
   CONSTRAINT `tbl_cm_ibfk_3` FOREIGN KEY (`int_cord_id_l2`) REFERENCES `tbl_SPOC` (`int_cord_id`),
    CONSTRAINT `tbl_cm_ibfk_4` FOREIGN KEY (`int_cord_id_l3`) REFERENCES `tbl_SPOC` (`int_cord_id`)
);

CREATE TABLE `tbl_faculty` (
  `int_fal_id` int(5) NOT NULL AUTO_INCREMENT,
  `int_course_id` int(5) NOT NULL,
  `txt_fal_fname` varchar(255) NOT NULL,
  `txt_fal_lname` varchar(255) NOT NULL,
  `txt_fal_email` varchar(255) NOT NULL,
  `txt_fal_pwd` varchar(255) NOT NULL,
  `txt_fal_role` varchar(10) NOT NULL,
  `txt_created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`int_fal_id`),
  KEY `int_course_id` (`int_course_id`),
  CONSTRAINT `tbl_faculty_ibfk_1` FOREIGN KEY (`int_course_id`) REFERENCES `tbl_course` (`int_course_id`)
);

CREATE TABLE tbl_question_CMA (
    int_question_id int(5) NOT NULL AUTO_INCREMENT,
  	int_cat_id int(5) NOT NULL,
  	txt_sub_cat varchar(10),
  	txt_question varchar(10),
   	txt_created_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (int_question_id),
    FOREIGN KEY (int_cat_id) REFERENCES tbl_catagory(int_cat_id)
);

CREATE TABLE tbl_answer_CMA (
    int_answer_id int(5) NOT NULL AUTO_INCREMENT,
  	int_question_id int(5) NOT NULL,
  	int_star int(5) NOT NULL,
  	txt_option varchar(10),
   	txt_created_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (int_answer_id),
    FOREIGN KEY (int_question_id) REFERENCES tbl_question_CMA (int_question_id)
);

CREATE TABLE tbl_question_CPA (
    int_question_id int(5) NOT NULL AUTO_INCREMENT,
  	int_cat_id int(5) NOT NULL,
  	txt_sub_cat varchar(10),
  	txt_question varchar(10),
   	txt_created_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (int_question_id),
    FOREIGN KEY (int_cat_id) REFERENCES tbl_catagory(int_cat_id)
);

CREATE TABLE tbl_answer_CPA (
    int_answer_id int(5) NOT NULL AUTO_INCREMENT,
  	int_question_id int(5) NOT NULL,
  	int_star int(5) NOT NULL,
  	txt_option varchar(10),
   	txt_created_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (int_answer_id),
    FOREIGN KEY (int_question_id) REFERENCES tbl_question_CMA (int_question_id)
);

CREATE TABLE tbl_feedback_cm(
int_feed_cm_id int(5) NOT NULL AUTO_INCREMENT,
int_cand_id int(5) NOT NULL,
int_cm_id int(5) NOT NULL,
int_city_id int(5) NOT NULL,
int_question_id int(5) NOT NULL,
int_option_id int(5) NOT NULL,
int_star int(5) NOT NULL,
txt_comment varchar(500),
txt_batch_date varchar(255) NOT NULL,
int_delete_flag int(2) NOT NULL DEFAULT '0',
PRIMARY KEY(int_feed_cm_id),
FOREIGN KEY(int_cand_id) REFERENCES `tbl_candidate`(`int_cand_id`),
FOREIGN KEY(int_cm_id) REFERENCES `tbl_cm`(`int_cm_id`),
FOREIGN KEY(int_city_id) REFERENCES `tbl_city`(`int_city_id`)
);

CREATE TABLE tbl_feedback_fac(
int_feed_fac_id int(5) NOT NULL AUTO_INCREMENT,
int_cand_id int(5) NOT NULL,
int_faculty_id int(5) NOT NULL,
int_city_id int(5) NOT NULL,
int_question_id int(5) NOT NULL,
int_option_id int(5) NOT NULL,
int_star int(5) NOT NULL,
txt_comment varchar(500),
txt_batch_date varchar(255) NOT NULL,
txt_created_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
int_delete_flag int(2) NOT NULL DEFAULT '0',
PRIMARY KEY(int_feed_fac_id),
FOREIGN KEY(int_cand_id) REFERENCES `tbl_candidate`(`int_cand_id`),
FOREIGN KEY(int_faculty_id) REFERENCES `tbl_faculty`(`int_fal_id`),
FOREIGN KEY(int_city_id) REFERENCES `tbl_city`(`int_city_id`)
);


CREATE TABLE tbl_feedback_acd(
int_feed_acd_id int(5) NOT NULL AUTO_INCREMENT,
int_cand_id int(5) NOT NULL,
int_faculty_id int(5) NOT NULL,
int_city_id int(5) NOT NULL,
int_course_id int(5) NOT NULL,
int_question_id int(5) NOT NULL,
int_option_id int(5) NOT NULL,
int_star int(5) NOT NULL,
txt_comment varchar(500),
txt_batch_date varchar(255) NOT NULL,
txt_created_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
int_delete_flag int(2) NOT NULL DEFAULT '0',
PRIMARY KEY(int_feed_acd_id),
FOREIGN KEY(int_cand_id) REFERENCES `tbl_candidate`(`int_cand_id`),
FOREIGN KEY(int_faculty_id) REFERENCES `tbl_faculty`(`int_fal_id`),
FOREIGN KEY(int_course_id) REFERENCES `tbl_course`(`int_course_id`),
FOREIGN KEY(int_city_id) REFERENCES `tbl_city`(`int_city_id`)
);


CREATE TABLE tbl_feedback_IT(
int_feed_IT_id int(5) NOT NULL AUTO_INCREMENT,
int_cand_id int(5) NOT NULL,
int_city_id int(5) NOT NULL,
int_question_id int(5) NOT NULL,
int_option_id int(5) NOT NULL,
int_star int(5) NOT NULL,
txt_comment varchar(500),
txt_batch_date varchar(255) NOT NULL,
txt_created_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
int_delete_flag int(2) NOT NULL DEFAULT '0',
PRIMARY KEY(int_feed_IT_id),
FOREIGN KEY(int_cand_id) REFERENCES `tbl_candidate`(`int_cand_id`),
FOREIGN KEY(int_city_id) REFERENCES `tbl_city`(`int_city_id`)
);
