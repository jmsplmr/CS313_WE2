--
-- PostgreSQL database dump
--

-- Dumped from database version 10.3 (Ubuntu 10.3-1.pgdg14.04+1)
-- Dumped by pg_dump version 10.4 (Ubuntu 10.4-2.pgdg16.04+1)

SET statement_timeout = 0;
SET lock_timeout = 0;
SET idle_in_transaction_session_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SELECT pg_catalog.set_config('search_path', '', false);
SET check_function_bodies = false;
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


--
-- Name: pgcrypto; Type: EXTENSION; Schema: -; Owner:
--

CREATE EXTENSION IF NOT EXISTS pgcrypto WITH SCHEMA public;


--
-- Name: EXTENSION pgcrypto; Type: COMMENT; Schema: -; Owner:
--

COMMENT ON EXTENSION pgcrypto IS 'cryptographic functions';


--
-- Name: validate_password(character varying); Type: FUNCTION; Schema: public; Owner: tevrufojxlziym
--

CREATE FUNCTION public.validate_password(userpass character varying) RETURNS refcursor
    LANGUAGE plpgsql
    AS $$
  DECLARE
  ref refcursor;
  BEGIN
    OPEN ref FOR SELECT users.id, (pswdhash = crypt(userpass, pswdhash)) as pswdmatch FROM users;
    RETURN ref;
  END;
  $$;


ALTER FUNCTION public.validate_password(userpass character varying) OWNER TO tevrufojxlziym;

SET default_tablespace = '';

SET default_with_oids = false;

--
-- Name: course; Type: TABLE; Schema: public; Owner: tevrufojxlziym
--

CREATE TABLE public.course (
    id integer NOT NULL,
    name character varying(80) NOT NULL,
    number character varying(10) NOT NULL
);


ALTER TABLE public.course OWNER TO tevrufojxlziym;

--
-- Name: course_id_seq; Type: SEQUENCE; Schema: public; Owner: tevrufojxlziym
--

CREATE SEQUENCE public.course_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.course_id_seq OWNER TO tevrufojxlziym;

--
-- Name: course_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: tevrufojxlziym
--

ALTER SEQUENCE public.course_id_seq OWNED BY public.course.id;


--
-- Name: course_rating; Type: TABLE; Schema: public; Owner: tevrufojxlziym
--

CREATE TABLE public.course_rating (
    id integer NOT NULL,
    course_id integer NOT NULL,
    user_id integer NOT NULL,
    rating integer NOT NULL
);


ALTER TABLE public.course_rating OWNER TO tevrufojxlziym;

--
-- Name: course_rating_id_seq; Type: SEQUENCE; Schema: public; Owner: tevrufojxlziym
--

CREATE SEQUENCE public.course_rating_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.course_rating_id_seq OWNER TO tevrufojxlziym;

--
-- Name: course_rating_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: tevrufojxlziym
--

ALTER SEQUENCE public.course_rating_id_seq OWNED BY public.course_rating.id;


--
-- Name: courses; Type: TABLE; Schema: public; Owner: tevrufojxlziym
--

CREATE TABLE public.courses (
    id integer NOT NULL,
    name character varying(80),
    street_address character varying(80),
    city character varying(40),
    state character varying(2),
    zip integer,
    phone integer,
    contact character varying(80)
);


ALTER TABLE public.courses OWNER TO tevrufojxlziym;

--
-- Name: courses_id_seq; Type: SEQUENCE; Schema: public; Owner: tevrufojxlziym
--

CREATE SEQUENCE public.courses_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.courses_id_seq OWNER TO tevrufojxlziym;

--
-- Name: courses_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: tevrufojxlziym
--

ALTER SEQUENCE public.courses_id_seq OWNED BY public.courses.id;


--
-- Name: game_format; Type: TABLE; Schema: public; Owner: tevrufojxlziym
--

CREATE TABLE public.game_format (
    id integer NOT NULL,
    name character varying(40),
    description character varying(500)
);


ALTER TABLE public.game_format OWNER TO tevrufojxlziym;

--
-- Name: game_format_id_seq; Type: SEQUENCE; Schema: public; Owner: tevrufojxlziym
--

CREATE SEQUENCE public.game_format_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.game_format_id_seq OWNER TO tevrufojxlziym;

--
-- Name: game_format_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: tevrufojxlziym
--

ALTER SEQUENCE public.game_format_id_seq OWNED BY public.game_format.id;


--
-- Name: rounds; Type: TABLE; Schema: public; Owner: tevrufojxlziym
--

CREATE TABLE public.rounds (
    id integer NOT NULL,
    course_id integer NOT NULL,
    user_id integer NOT NULL,
    format_id integer NOT NULL,
    score integer NOT NULL,
    date date NOT NULL
);


ALTER TABLE public.rounds OWNER TO tevrufojxlziym;

--
-- Name: rounds_id_seq; Type: SEQUENCE; Schema: public; Owner: tevrufojxlziym
--

CREATE SEQUENCE public.rounds_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.rounds_id_seq OWNER TO tevrufojxlziym;

--
-- Name: rounds_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: tevrufojxlziym
--

ALTER SEQUENCE public.rounds_id_seq OWNED BY public.rounds.id;


--
-- Name: users; Type: TABLE; Schema: public; Owner: tevrufojxlziym
--

CREATE TABLE public.users (
    id integer NOT NULL,
    fullname character varying(70),
    username character varying(30) NOT NULL,
    email character varying(80) NOT NULL,
    pswdhash character varying(80) NOT NULL
);


ALTER TABLE public.users OWNER TO tevrufojxlziym;

--
-- Name: users_id_seq; Type: SEQUENCE; Schema: public; Owner: tevrufojxlziym
--

CREATE SEQUENCE public.users_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.users_id_seq OWNER TO tevrufojxlziym;

--
-- Name: users_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: tevrufojxlziym
--

ALTER SEQUENCE public.users_id_seq OWNED BY public.users.id;


--
-- Name: course id; Type: DEFAULT; Schema: public; Owner: tevrufojxlziym
--

ALTER TABLE ONLY public.course ALTER COLUMN id SET DEFAULT nextval('public.course_id_seq'::regclass);


--
-- Name: course_rating id; Type: DEFAULT; Schema: public; Owner: tevrufojxlziym
--

ALTER TABLE ONLY public.course_rating ALTER COLUMN id SET DEFAULT nextval('public.course_rating_id_seq'::regclass);


--
-- Name: courses id; Type: DEFAULT; Schema: public; Owner: tevrufojxlziym
--

ALTER TABLE ONLY public.courses ALTER COLUMN id SET DEFAULT nextval('public.courses_id_seq'::regclass);


--
-- Name: game_format id; Type: DEFAULT; Schema: public; Owner: tevrufojxlziym
--

ALTER TABLE ONLY public.game_format ALTER COLUMN id SET DEFAULT nextval('public.game_format_id_seq'::regclass);


--
-- Name: rounds id; Type: DEFAULT; Schema: public; Owner: tevrufojxlziym
--

ALTER TABLE ONLY public.rounds ALTER COLUMN id SET DEFAULT nextval('public.rounds_id_seq'::regclass);


--
-- Name: users id; Type: DEFAULT; Schema: public; Owner: tevrufojxlziym
--

ALTER TABLE ONLY public.users ALTER COLUMN id SET DEFAULT nextval('public.users_id_seq'::regclass);


--
-- Data for Name: course; Type: TABLE DATA; Schema: public; Owner: tevrufojxlziym
--

COPY public.course (id, name, number) FROM stdin;
1	Web Engineering II	CS 313
2	Object-oriented Programming	CS 165
\.


--
-- Data for Name: course_rating; Type: TABLE DATA; Schema: public; Owner: tevrufojxlziym
--

COPY public.course_rating (id, course_id, user_id, rating) FROM stdin;
1	1	5	6
2	2	5	7
3	3	5	8
4	4	5	5
5	5	5	5
\.


--
-- Data for Name: courses; Type: TABLE DATA; Schema: public; Owner: tevrufojxlziym
--

COPY public.courses (id, name, street_address, city, state, zip, phone, contact) FROM stdin;
1	Nature Park	5th West and 3rd North	Rexburg	ID	83440	2083593020	Rexburg Area Chamber of Commerce
2	Freeman Park	1430 Willow Ave	Idaho Falls	ID	83402	2086128100	Idaho Falls Parks & Recreation
3	McCowin Park	3098 Southwick Ln	Ammon	ID	83406	2086124000	City of Ammon
4	Teton Valley	235 South 5th Street	Driggs	ID	83422	2083542000	Karen Russell
5	Grand Targhee Resort	3300 E Ski Hill Road	Alta	WY	83414	\N	\N
6	James' Test course	999999 Somewhere Drive	Here	NW	99999	2025053340	James
7	James Test Course	### Address Dr	Rexburg	ID	83440	1554445656	James Palmer
9	None seen here	Here	Now	St	83440	11111	James Palmer
10	Hello test	123 Here Now	Rexburg	ID	83440	12345	James
\.


--
-- Data for Name: game_format; Type: TABLE DATA; Schema: public; Owner: tevrufojxlziym
--

COPY public.game_format (id, name, description) FROM stdin;
1	18-hole	Full-round of 18 holes
2	9-hole	Half-round of 9 holes
\.


--
-- Data for Name: rounds; Type: TABLE DATA; Schema: public; Owner: tevrufojxlziym
--

COPY public.rounds (id, course_id, user_id, format_id, score, date) FROM stdin;
4	1	5	2	100	2018-06-12
5	2	5	1	50	2018-06-11
7	1	5	2	2020	2018-01-01
8	5	5	1	63	2018-06-12
9	1	7	2	100	2018-06-20
10	3	5	2	2	2018-06-24
\.


--
-- Data for Name: users; Type: TABLE DATA; Schema: public; Owner: tevrufojxlziym
--

COPY public.users (id, fullname, username, email, pswdhash) FROM stdin;
1	James Palmer	ParSalian	jms.plmr@gmail.com	$2a$06$ZOIN.OVxck9wf6JtPRnsy.wZ52QlrLmX91..PGb1SZiQdX83m2.Yu
2	James Palmer	jmsplmr	pal15023@byui.edu	$2a$06$D2Ghac8XPfHAco7L2k9LeO50koAZCNzrwyjrkbfblk4R0.ZbQpLZe
3	testing	testing	tla18001@byui.edu	$2a$06$rOfZvGht4ZZo5AnRD5jaTepr1BbTX9IzyJBj7iIMmhDT5PwgBlNCu
4	test account	test	test@byui.edu	$2a$06$97or/Y3B97aImwLWSVUDIuh.lhtKWIMeV4Pcbrse.2UdMPFvraTzm
5	test	cs313	test1@byui.edu	$2a$06$8tpHIwmtIMglMy6gtbwUE.lhwIyhU2quZSqugXG.fznGUisLVXNs.
6	James Palmer	palm	pal15023@gmail.com	$2y$10$mIm46XnJOQ93hc6lammVyOBd5YFFbxvmreDV96pUlnO3ICLzbDFKG
7	James	test_	test@gmail.com	$2a$06$bPZMfq406cYU9baIrNirkuOzsOfN1S9Sb/CFosIVD9NR.cuMTBADC
\.


--
-- Name: course_id_seq; Type: SEQUENCE SET; Schema: public; Owner: tevrufojxlziym
--

SELECT pg_catalog.setval('public.course_id_seq', 2, true);


--
-- Name: course_rating_id_seq; Type: SEQUENCE SET; Schema: public; Owner: tevrufojxlziym
--

SELECT pg_catalog.setval('public.course_rating_id_seq', 6, true);


--
-- Name: courses_id_seq; Type: SEQUENCE SET; Schema: public; Owner: tevrufojxlziym
--

SELECT pg_catalog.setval('public.courses_id_seq', 10, true);


--
-- Name: game_format_id_seq; Type: SEQUENCE SET; Schema: public; Owner: tevrufojxlziym
--

SELECT pg_catalog.setval('public.game_format_id_seq', 2, true);


--
-- Name: rounds_id_seq; Type: SEQUENCE SET; Schema: public; Owner: tevrufojxlziym
--

SELECT pg_catalog.setval('public.rounds_id_seq', 10, true);


--
-- Name: users_id_seq; Type: SEQUENCE SET; Schema: public; Owner: tevrufojxlziym
--

SELECT pg_catalog.setval('public.users_id_seq', 7, true);


--
-- Name: course course_number_key; Type: CONSTRAINT; Schema: public; Owner: tevrufojxlziym
--

ALTER TABLE ONLY public.course
    ADD CONSTRAINT course_number_key UNIQUE (number);


--
-- Name: course course_pkey; Type: CONSTRAINT; Schema: public; Owner: tevrufojxlziym
--

ALTER TABLE ONLY public.course
    ADD CONSTRAINT course_pkey PRIMARY KEY (id);


--
-- Name: course_rating course_rating_pkey; Type: CONSTRAINT; Schema: public; Owner: tevrufojxlziym
--

ALTER TABLE ONLY public.course_rating
    ADD CONSTRAINT course_rating_pkey PRIMARY KEY (id);


--
-- Name: courses courses_name_key; Type: CONSTRAINT; Schema: public; Owner: tevrufojxlziym
--

ALTER TABLE ONLY public.courses
    ADD CONSTRAINT courses_name_key UNIQUE (name);


--
-- Name: courses courses_pkey; Type: CONSTRAINT; Schema: public; Owner: tevrufojxlziym
--

ALTER TABLE ONLY public.courses
    ADD CONSTRAINT courses_pkey PRIMARY KEY (id);


--
-- Name: game_format game_format_name_key; Type: CONSTRAINT; Schema: public; Owner: tevrufojxlziym
--

ALTER TABLE ONLY public.game_format
    ADD CONSTRAINT game_format_name_key UNIQUE (name);


--
-- Name: game_format game_format_pkey; Type: CONSTRAINT; Schema: public; Owner: tevrufojxlziym
--

ALTER TABLE ONLY public.game_format
    ADD CONSTRAINT game_format_pkey PRIMARY KEY (id);


--
-- Name: rounds rounds_pkey; Type: CONSTRAINT; Schema: public; Owner: tevrufojxlziym
--

ALTER TABLE ONLY public.rounds
    ADD CONSTRAINT rounds_pkey PRIMARY KEY (id);


--
-- Name: users users_email_key; Type: CONSTRAINT; Schema: public; Owner: tevrufojxlziym
--

ALTER TABLE ONLY public.users
    ADD CONSTRAINT users_email_key UNIQUE (email);


--
-- Name: users users_pkey; Type: CONSTRAINT; Schema: public; Owner: tevrufojxlziym
--

ALTER TABLE ONLY public.users
    ADD CONSTRAINT users_pkey PRIMARY KEY (id);


--
-- Name: users users_username_key; Type: CONSTRAINT; Schema: public; Owner: tevrufojxlziym
--

ALTER TABLE ONLY public.users
    ADD CONSTRAINT users_username_key UNIQUE (username);


--
-- Name: course_rating course_rating_course_id_fkey; Type: FK CONSTRAINT; Schema: public; Owner: tevrufojxlziym
--

ALTER TABLE ONLY public.course_rating
    ADD CONSTRAINT course_rating_course_id_fkey FOREIGN KEY (course_id) REFERENCES public.courses(id);


--
-- Name: course_rating course_rating_user_id_fkey; Type: FK CONSTRAINT; Schema: public; Owner: tevrufojxlziym
--

ALTER TABLE ONLY public.course_rating
    ADD CONSTRAINT course_rating_user_id_fkey FOREIGN KEY (user_id) REFERENCES public.users(id);


--
-- Name: note note_course_id_fkey; Type: FK CONSTRAINT; Schema: public; Owner: tevrufojxlziym
--

ALTER TABLE ONLY public.note
    ADD CONSTRAINT note_course_id_fkey FOREIGN KEY (course_id) REFERENCES public.course(id);


--
-- Name: rounds rounds_course_id_fkey; Type: FK CONSTRAINT; Schema: public; Owner: tevrufojxlziym
--

ALTER TABLE ONLY public.rounds
    ADD CONSTRAINT rounds_course_id_fkey FOREIGN KEY (course_id) REFERENCES public.courses(id);


--
-- Name: rounds rounds_format_id_fkey; Type: FK CONSTRAINT; Schema: public; Owner: tevrufojxlziym
--

ALTER TABLE ONLY public.rounds
    ADD CONSTRAINT rounds_format_id_fkey FOREIGN KEY (format_id) REFERENCES public.game_format(id);


--
-- Name: rounds rounds_user_id_fkey; Type: FK CONSTRAINT; Schema: public; Owner: tevrufojxlziym
--

ALTER TABLE ONLY public.rounds
    ADD CONSTRAINT rounds_user_id_fkey FOREIGN KEY (user_id) REFERENCES public.users(id);




--
-- Name: SCHEMA public; Type: ACL; Schema: -; Owner: tevrufojxlziym
--

REVOKE ALL ON SCHEMA public FROM postgres;
REVOKE ALL ON SCHEMA public FROM PUBLIC;
GRANT ALL ON SCHEMA public TO tevrufojxlziym;
GRANT ALL ON SCHEMA public TO PUBLIC;


--
-- Name: LANGUAGE plpgsql; Type: ACL; Schema: -; Owner: postgres
--

GRANT ALL ON LANGUAGE plpgsql TO tevrufojxlziym;


--
-- PostgreSQL database dump complete
--

