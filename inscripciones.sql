PGDMP     	            	        y            Inscripciones    13.1    13.1 
    �           0    0    ENCODING    ENCODING        SET client_encoding = 'UTF8';
                      false            �           0    0 
   STDSTRINGS 
   STDSTRINGS     (   SET standard_conforming_strings = 'on';
                      false            �           0    0 
   SEARCHPATH 
   SEARCHPATH     8   SELECT pg_catalog.set_config('search_path', '', false);
                      false            �           1262    16419    Inscripciones    DATABASE     l   CREATE DATABASE "Inscripciones" WITH TEMPLATE = template0 ENCODING = 'UTF8' LOCALE = 'Spanish_Mexico.1252';
    DROP DATABASE "Inscripciones";
                postgres    false            �            1259    16428 
   Estudiante    TABLE     T  CREATE TABLE public."Estudiante" (
    "Matricula" integer NOT NULL,
    "Nombre" character varying(30)[] NOT NULL,
    "Apellido_Paterno" character varying(30)[] NOT NULL,
    "Apellido_Materno" character varying(30)[] NOT NULL,
    "Edad" integer NOT NULL,
    "Email" character varying(30)[] NOT NULL,
    "Telefono" integer NOT NULL
);
     DROP TABLE public."Estudiante";
       public         heap    postgres    false            �            1259    16420    Grupo    TABLE     �   CREATE TABLE public."Grupo" (
    "Id_Grupo" integer NOT NULL,
    "Semestre" character varying(30)[] NOT NULL,
    "Grupo" character varying(30)[] NOT NULL,
    "Turno" character varying(30)[] NOT NULL
);
    DROP TABLE public."Grupo";
       public         heap    postgres    false            �          0    16428 
   Estudiante 
   TABLE DATA           �   COPY public."Estudiante" ("Matricula", "Nombre", "Apellido_Paterno", "Apellido_Materno", "Edad", "Email", "Telefono") FROM stdin;
    public          postgres    false    201   
       �          0    16420    Grupo 
   TABLE DATA           K   COPY public."Grupo" ("Id_Grupo", "Semestre", "Grupo", "Turno") FROM stdin;
    public          postgres    false    200   '       )           2606    16435    Estudiante Estudiante_pkey 
   CONSTRAINT     e   ALTER TABLE ONLY public."Estudiante"
    ADD CONSTRAINT "Estudiante_pkey" PRIMARY KEY ("Matricula");
 H   ALTER TABLE ONLY public."Estudiante" DROP CONSTRAINT "Estudiante_pkey";
       public            postgres    false    201            '           2606    16427    Grupo Grupo_pkey 
   CONSTRAINT     Z   ALTER TABLE ONLY public."Grupo"
    ADD CONSTRAINT "Grupo_pkey" PRIMARY KEY ("Id_Grupo");
 >   ALTER TABLE ONLY public."Grupo" DROP CONSTRAINT "Grupo_pkey";
       public            postgres    false    200            �      x������ � �      �      x������ � �     