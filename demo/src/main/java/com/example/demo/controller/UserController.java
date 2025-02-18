package com.example.demo.controller;

import com.example.demo.model.User;
import com.example.demo.service.UserService;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;
import org.springframework.web.bind.annotation.*;

import java.util.List;

@Controller
@RequestMapping("/usuarios")
public class UserController {

    @Autowired
    private UserService usuarioService;

    @GetMapping
    public String listUsuarios(Model model) {
        List<User> usuarios = usuarioService.findAll();
        model.addAttribute("usuarios", usuarios);
        return "usuarios/list"; // Vista para listar usuarios
    }

    @GetMapping("/nuevo")
    public String showFormForAdd(Model model) {
        User usuario = new User();
        model.addAttribute("usuario", usuario);
        return "usuarios/usuario-form"; // Vista para agregar usuario
    }

    @PostMapping
    public String saveUsuario(@ModelAttribute("usuario") User usuario) {
        usuarioService.save(usuario);
        return "redirect:/usuarios"; // Redirigir a la lista de usuarios
    }

    @GetMapping("/editar/{id}")
    public String showFormForUpdate(@PathVariable("id") String nomina, Model model) {
        User usuario = usuarioService.findByNomina(nomina);
        model.addAttribute("usuario", usuario);
        return "usuarios/usuario-form"; // Vista para editar usuario
    }

    @GetMapping("/eliminar/{id}")
    public String deleteUsuario(@PathVariable("id") Long id) {
        usuarioService.deleteById(id);
        return "redirect:/usuarios"; // Redirigir a la lista de usuarios
    }
}
