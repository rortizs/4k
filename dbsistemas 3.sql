-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-04-2020 a las 05:49:03
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.2.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `dbsistemas2`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `Id_Categoria` int(11) NOT NULL,
  `Nombre_Categoria` varchar(50) NOT NULL COMMENT 'NombreCategoria',
  `Descripcion` varchar(256) NOT NULL,
  `Estado_Categoria` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compra`
--

CREATE TABLE `compra` (
  `Id_Compra` int(11) NOT NULL,
  `Id_Proveedor` int(11) NOT NULL,
  `Id_Usuario` int(11) NOT NULL,
  `Tipo_Comprobante` varchar(20) CHARACTER SET latin1 NOT NULL,
  `Serie_Comprobante` varchar(7) CHARACTER SET latin1 NOT NULL,
  `Numero_Comprobante` varchar(10) CHARACTER SET latin1 NOT NULL,
  `Fecha_Hora` datetime NOT NULL,
  `Impuesto` decimal(4,0) NOT NULL,
  `Total_Compra` decimal(11,0) NOT NULL,
  `Estado_Compra` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_compra`
--

CREATE TABLE `detalle_compra` (
  `Id_Detalle_Compra` int(11) NOT NULL,
  `Id_Compra` int(11) NOT NULL,
  `Id_Producto` int(11) NOT NULL,
  `Cantidad` int(11) NOT NULL,
  `Precio_Compra` decimal(11,0) NOT NULL,
  `Precio_Venta` decimal(11,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_venta`
--

CREATE TABLE `detalle_venta` (
  `Id_Detalle_Venta` int(11) NOT NULL,
  `Id_Venta` int(11) NOT NULL,
  `Id_Producto` int(11) NOT NULL,
  `Cantidad` int(11) NOT NULL,
  `Precio_Venta` decimal(11,0) NOT NULL,
  `Descuento` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `modelo`
--

CREATE TABLE `modelo` (
  `Id_Modelo` int(11) NOT NULL,
  `Nombre_Modelo` varchar(50) NOT NULL,
  `Marca_Modelo` varchar(50) NOT NULL,
  `Codigo_Modelo` varchar(50) NOT NULL,
  `Color_Modelo` varchar(50) NOT NULL,
  `Talla_Modelo` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nombre_persona`
--

CREATE TABLE `nombre_persona` (
  `Id_Nombre_Persona` int(11) NOT NULL,
  `Id_Persona` int(11) NOT NULL,
  `Primer_Nombre` varchar(25) CHARACTER SET latin1 NOT NULL,
  `Segundo_Nombre` varchar(25) CHARACTER SET latin1 NOT NULL,
  `Primer_Apellido` varchar(25) CHARACTER SET latin1 NOT NULL,
  `Segundo_Apellido` varchar(25) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permiso`
--

CREATE TABLE `permiso` (
  `Id_Permiso` int(11) NOT NULL,
  `Nombre_Permiso` varchar(20) DEFAULT NULL,
  `Descripcion_Permiso` varchar(75) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

CREATE TABLE `persona` (
  `Id_Persona` int(11) NOT NULL,
  `Tipo_Persona` varchar(20) CHARACTER SET latin1 NOT NULL,
  `Dpi` int(20) NOT NULL,
  `Direccion` varchar(50) CHARACTER SET latin1 NOT NULL,
  `Email` varchar(50) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `Id_Producto` int(11) NOT NULL,
  `Nombre_Producto` varchar(50) CHARACTER SET latin1 NOT NULL,
  `Stock` int(11) NOT NULL,
  `Descripcion_Producto` varchar(256) CHARACTER SET latin1 NOT NULL,
  `Imagen_Podructo` varchar(50) CHARACTER SET latin1 NOT NULL,
  `Estado_Producto` int(11) NOT NULL DEFAULT 1,
  `Id_Categoria` int(11) NOT NULL,
  `Id_Temporada` int(11) NOT NULL,
  `Id_Modelo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `telefono_persona`
--

CREATE TABLE `telefono_persona` (
  `Id_Telefono_Persona` int(11) NOT NULL,
  `Id_Persona` int(11) NOT NULL,
  `Celular` int(11) NOT NULL,
  `Trabajo` int(11) NOT NULL,
  `Casa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `temporada`
--

CREATE TABLE `temporada` (
  `Id_Temporada` int(10) NOT NULL,
  `Nombre_Temporada` varchar(50) NOT NULL,
  `Año_Temporada` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `Id_Usuario` int(11) NOT NULL COMMENT 'ID USUARIO, AUTO INCREMENT ',
  `Nombre_Usuario` varchar(100) DEFAULT NULL,
  `Dpi` int(20) DEFAULT NULL,
  `Direccion` varchar(70) NOT NULL,
  `Telefono` varchar(10) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Cargo` varchar(20) NOT NULL,
  `User_Name` varchar(20) DEFAULT NULL COMMENT 'example sdos',
  `Password` varchar(64) DEFAULT NULL,
  `Imagen` varchar(50) NOT NULL,
  `Estado` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario_permiso`
--

CREATE TABLE `usuario_permiso` (
  `Id_Usuario_Permiso` int(11) NOT NULL,
  `Id_Usuario` int(11) NOT NULL,
  `Id_Permiso` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `venta`
--

CREATE TABLE `venta` (
  `Id_Venta` int(11) NOT NULL,
  `Id_Cliente` int(11) NOT NULL,
  `Id_Usuario` int(11) NOT NULL,
  `Tipo_Comprobante` varchar(20) CHARACTER SET latin1 NOT NULL,
  `Serie_Comprobante` varchar(7) CHARACTER SET latin1 NOT NULL,
  `Numero_Comprobante` varchar(10) CHARACTER SET latin1 NOT NULL,
  `Fecha_Hora` datetime NOT NULL,
  `Impuesto` decimal(4,0) NOT NULL,
  `Total_Venta` decimal(11,0) NOT NULL,
  `Estado_Venta` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`Id_Categoria`);

--
-- Indices de la tabla `compra`
--
ALTER TABLE `compra`
  ADD PRIMARY KEY (`Id_Compra`),
  ADD KEY `Fk_Compra_Persona_Idx` (`Id_Proveedor`),
  ADD KEY `Fk_Compra_Usuario_Idx` (`Id_Usuario`);

--
-- Indices de la tabla `detalle_compra`
--
ALTER TABLE `detalle_compra`
  ADD PRIMARY KEY (`Id_Detalle_Compra`),
  ADD KEY `Fk_Detalle_Compra_Producto_Idx` (`Id_Producto`),
  ADD KEY `Fk_Detalle_Compra_Compra_Idx` (`Id_Compra`);

--
-- Indices de la tabla `detalle_venta`
--
ALTER TABLE `detalle_venta`
  ADD PRIMARY KEY (`Id_Detalle_Venta`),
  ADD KEY `Fk_Detalle_Venta_Venta_Idx` (`Id_Venta`),
  ADD KEY `Fk_Detalle_Venta_Producto_Idx` (`Id_Producto`);

--
-- Indices de la tabla `modelo`
--
ALTER TABLE `modelo`
  ADD PRIMARY KEY (`Id_Modelo`);

--
-- Indices de la tabla `nombre_persona`
--
ALTER TABLE `nombre_persona`
  ADD PRIMARY KEY (`Id_Nombre_Persona`),
  ADD KEY `Fk_Persona_Telefono_Persona_Idx` (`Id_Persona`);

--
-- Indices de la tabla `permiso`
--
ALTER TABLE `permiso`
  ADD PRIMARY KEY (`Id_Permiso`);

--
-- Indices de la tabla `persona`
--
ALTER TABLE `persona`
  ADD PRIMARY KEY (`Id_Persona`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`Id_Producto`),
  ADD UNIQUE KEY `Nombre_Producto_UNIQUE` (`Nombre_Producto`),
  ADD KEY `Fk_Producto_Categoria_Idx` (`Id_Categoria`),
  ADD KEY `Fk_Producto_Modelo_Idx` (`Id_Modelo`),
  ADD KEY `Fk_Producto_Temporada_Idx` (`Id_Temporada`);

--
-- Indices de la tabla `telefono_persona`
--
ALTER TABLE `telefono_persona`
  ADD PRIMARY KEY (`Id_Telefono_Persona`),
  ADD KEY `Fk_Persona_Telefono_Persona_Idx` (`Id_Persona`);

--
-- Indices de la tabla `temporada`
--
ALTER TABLE `temporada`
  ADD PRIMARY KEY (`Id_Temporada`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`Id_Usuario`);

--
-- Indices de la tabla `usuario_permiso`
--
ALTER TABLE `usuario_permiso`
  ADD PRIMARY KEY (`Id_Usuario_Permiso`),
  ADD KEY `Fk_Usuario_Permiso_Usuario_Idx` (`Id_Usuario`),
  ADD KEY `Fk_Usuario_Permiso_Permiso_Idx` (`Id_Permiso`);

--
-- Indices de la tabla `venta`
--
ALTER TABLE `venta`
  ADD PRIMARY KEY (`Id_Venta`),
  ADD KEY `Fk_Venta_Usuario_Idx` (`Id_Usuario`),
  ADD KEY `Fk_Venta_Persona_Idx` (`Id_Cliente`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `Id_Categoria` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `compra`
--
ALTER TABLE `compra`
  MODIFY `Id_Compra` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `detalle_compra`
--
ALTER TABLE `detalle_compra`
  MODIFY `Id_Detalle_Compra` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `detalle_venta`
--
ALTER TABLE `detalle_venta`
  MODIFY `Id_Detalle_Venta` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `modelo`
--
ALTER TABLE `modelo`
  MODIFY `Id_Modelo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `nombre_persona`
--
ALTER TABLE `nombre_persona`
  MODIFY `Id_Nombre_Persona` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `permiso`
--
ALTER TABLE `permiso`
  MODIFY `Id_Permiso` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `persona`
--
ALTER TABLE `persona`
  MODIFY `Id_Persona` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `Id_Producto` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `telefono_persona`
--
ALTER TABLE `telefono_persona`
  MODIFY `Id_Telefono_Persona` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `temporada`
--
ALTER TABLE `temporada`
  MODIFY `Id_Temporada` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `Id_Usuario` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID USUARIO, AUTO INCREMENT ';

--
-- AUTO_INCREMENT de la tabla `usuario_permiso`
--
ALTER TABLE `usuario_permiso`
  MODIFY `Id_Usuario_Permiso` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `venta`
--
ALTER TABLE `venta`
  MODIFY `Id_Venta` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
