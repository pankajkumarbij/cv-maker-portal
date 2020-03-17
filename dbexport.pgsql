--
-- PostgreSQL database dump
--

-- Dumped from database version 10.12 (Ubuntu 10.12-0ubuntu0.18.04.1)
-- Dumped by pg_dump version 10.12 (Ubuntu 10.12-0ubuntu0.18.04.1)

SET statement_timeout = 0;
SET lock_timeout = 0;
SET idle_in_transaction_session_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SELECT pg_catalog.set_config('search_path', '', false);
SET check_function_bodies = false;
SET xmloption = content;
SET client_min_messages = warning;
SET row_security = off;

--
-- Name: plpgsql; Type: EXTENSION; Schema: -; Owner: 
--

CREATE EXTENSION IF NOT EXISTS plpgsql WITH SCHEMA pg_catalog;


--
-- Name: EXTENSION plpgsql; Type: COMMENT; Schema: -; Owner: 
--

COMMENT ON EXTENSION plpgsql IS 'PL/pgSQL procedural language';


SET default_tablespace = '';

SET default_with_oids = false;

--
-- Name: education; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.education (
    collage_name character varying(100),
    degree character varying(100),
    branch character varying(100),
    cpi integer,
    board_name_10 character varying(100),
    school_name_10 character varying(100),
    percent_10 integer,
    board_name_12 character varying(100),
    school_name_12 character varying(100),
    percent_12 integer,
    username character varying(100)
);


ALTER TABLE public.education OWNER TO postgres;

--
-- Name: personal; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.personal (
    linkedin character varying(100),
    github character varying(100),
    blood character varying(5),
    pincode integer,
    district character varying(100),
    state character varying(100),
    username character varying(100)
);


ALTER TABLE public.personal OWNER TO postgres;

--
-- Name: project; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.project (
    project_title1 character varying(100),
    pstart_date1 character varying(100),
    pend_date1 character varying(100),
    pdiscription1 character varying(100),
    project_title2 character varying(100),
    pstart_date2 character varying(100),
    pend_date2 character varying(100),
    pdiscription2 character varying(100),
    username character varying(100)
);


ALTER TABLE public.project OWNER TO postgres;

--
-- Name: signup; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.signup (
    username character varying(100) NOT NULL,
    password character varying(100),
    name character varying(100),
    gender character varying(20),
    mobile bigint,
    email character varying(100),
    id integer NOT NULL
);


ALTER TABLE public.signup OWNER TO postgres;

--
-- Name: signup_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.signup_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.signup_id_seq OWNER TO postgres;

--
-- Name: signup_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.signup_id_seq OWNED BY public.signup.id;


--
-- Name: skills; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.skills (
    skill character varying(10000),
    username character varying(100)
);


ALTER TABLE public.skills OWNER TO postgres;

--
-- Name: work_experience; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.work_experience (
    work_title1 character varying(100),
    company1 character varying(100),
    start_date1 character varying(100),
    end_date1 character varying(100),
    discription1 character varying(100),
    work_title2 character varying(100),
    company2 character varying(100),
    start_date2 character varying(100),
    end_date2 character varying(100),
    discription2 character varying(100),
    username character varying(100)
);


ALTER TABLE public.work_experience OWNER TO postgres;

--
-- Name: signup id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.signup ALTER COLUMN id SET DEFAULT nextval('public.signup_id_seq'::regclass);


--
-- Data for Name: education; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.education (collage_name, degree, branch, cpi, board_name_10, school_name_10, percent_10, board_name_12, school_name_12, percent_12, username) FROM stdin;
yyy	yy	yyy	8	yyyyy	yyyy	44	yyyyy	yyyyy	88	Lucky1099
IIIT Manipur	B.TECH	ECE	8	U.P Board	Harish Chandra Inter Collage Varansi	89	U.P Board	G.I.C Dudhi	83	kanhaiya@iiitmanipur.ac.in
yyy	pk	pk	8	yyyyy	yyyyy	88	yyyyy	yyyy	44	Lucky1099
IIT Bombay	B.TECH	ECE	8	U.P Board	G.I.C Dudhi	83	U.P Board	Harish Chandra Inter Collage Varansi	89	kanhaiya@iiitmanipur.ac.in
IIIT Manipur	B.Tech	CSE	8	RBSC	SNIA,Danta	75	RBSC	SNIA,Danta	75	pankaj
\.


--
-- Data for Name: personal; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.personal (linkedin, github, blood, pincode, district, state, username) FROM stdin;
rr	ttt	A+	777777	yyy	yyy	Lucky1099
https//:kanhaiya@iiitmanipur.ac.in	https//:kanhaiya@iiitmanipur.ac.in	B+	231208	sonebhadra	U.P	kanhaiya@iiitmanipur.ac.in
pk	pk	A+	777777	yyy	yyy	Lucky1099
https//:kanhaiya@iiitmanipur.ac.in	https//:kanhaiya@iiitmanipur.ac.in	A+	231208	sonebhadra	U.P	kanhaiya@iiitmanipur.ac.in
https://limkedin/pankaj	https://github/pankaj	B-	332406	Sikar	Rajasthan	pankaj
\.


--
-- Data for Name: project; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.project (project_title1, pstart_date1, pend_date1, pdiscription1, project_title2, pstart_date2, pend_date2, pdiscription2, username) FROM stdin;
tyu	0066-06-06	0066-06-06	yyyy	yyyyy	0999-09-09	0099-09-09	yyyy	Lucky1099
Research Internship	2020-03-10	2020-03-03	pass	Research Internship	2020-03-03	2020-03-18	Pass	kanhaiya@iiitmanipur.ac.in
tyu	0066-06-06	0066-06-06	yyyy	yyyyy	0999-09-09	0099-09-09	yyyy	Lucky1099
Research Internship	2020-03-10	2020-03-03	pass	Research Internship	2020-03-03	2020-03-18	Pass	kanhaiya@iiitmanipur.ac.in
web development	2020-03-27	2020-03-24	academic project	machine learning	2020-03-09	2020-03-17	oun personal project	pankaj
\.


--
-- Data for Name: signup; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.signup (username, password, name, gender, mobile, email, id) FROM stdin;
pankaj	Pankaj@123	pankaj	Male	6378298502	pankaj@gmail.com	1
rahul	123	rahul	Male	12345679	rahul@gmail.com	6
lucky1099	Lucky	lucky	Female	487673428	lucky@gmail.com	7
luckyji	123	ww	Male	123	l@g.c	8
rajat11042	Rajat@123	rajat	Male	6377577809	rajat@iiitmanipur.ac.in	9
Rahul	Rahul@123	Rahul Kumar Bijarniya	Male	7865342897	rahul@gmail.com	10
Lucky1099	123	lucky kumari	Male	6204944065	lucky@gmail.com	11
kanhaiya@iiitmanipur.ac.in	Kanhaiya@1	kanhaiya lal	Male	9140650274	kanhaiya@iiitmanipur.ac.in	12
\.


--
-- Data for Name: skills; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.skills (skill, username) FROM stdin;
Matlab,C,Semiconducto,DSP etc	kanhaiya@iiitmanipur.ac.in
Matlab,C,Semiconducto,DSP etc	kanhaiya@iiitmanipur.ac.in
c,c++	Lucky1099
c,c++	Lucky1099
java,c,c++ and python,Django	pankaj
\.


--
-- Data for Name: work_experience; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.work_experience (work_title1, company1, start_date1, end_date1, discription1, work_title2, company2, start_date2, end_date2, discription2, username) FROM stdin;
yyyy	yyyyyy	0888-08-08	0888-08-08	yyy	yyyy	yyyyy	0777-07-07	0777-07-07	yyyy	Lucky1099
Research Internship	Google	2020-03-10	2020-03-11	Pass	Research	Microsoft	2020-03-20	2020-03-26	Pass	kanhaiya@iiitmanipur.ac.in
yyyy	yyyyyy	0888-08-08	0888-08-08	yyy	yyyy	yyyyy	0777-07-07	0777-07-07	yyyy	Lucky1099
Research Internship	Googleji	2020-03-10	2020-03-11	Pass	Research	Microsoft	2020-03-20	2020-03-26	Pass	kanhaiya@iiitmanipur.ac.in
web development	google.pvt.ltd	2020-03-18	2020-03-31	this project is based on web.	machine learning	IBM	2020-03-13	2020-02-22	this project based on AI.	pankaj
\.


--
-- Name: signup_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.signup_id_seq', 12, true);


--
-- Name: signup signup_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.signup
    ADD CONSTRAINT signup_pkey PRIMARY KEY (username);


--
-- Name: education education_username_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.education
    ADD CONSTRAINT education_username_fkey FOREIGN KEY (username) REFERENCES public.signup(username);


--
-- Name: personal personal_username_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.personal
    ADD CONSTRAINT personal_username_fkey FOREIGN KEY (username) REFERENCES public.signup(username);


--
-- Name: project project_username_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.project
    ADD CONSTRAINT project_username_fkey FOREIGN KEY (username) REFERENCES public.signup(username);


--
-- Name: skills skills_username_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.skills
    ADD CONSTRAINT skills_username_fkey FOREIGN KEY (username) REFERENCES public.signup(username);


--
-- Name: work_experience work_experience_username_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.work_experience
    ADD CONSTRAINT work_experience_username_fkey FOREIGN KEY (username) REFERENCES public.signup(username);


--
-- PostgreSQL database dump complete
--

