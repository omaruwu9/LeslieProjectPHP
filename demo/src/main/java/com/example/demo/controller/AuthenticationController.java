package com.example.demo.controller;

import com.example.demo.model.User;
import com.example.demo.service.UserService;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.PostMapping;

@Controller
public class AuthenticationController {

    @Autowired
    private UserService usuarioService;

    @GetMapping("/login")
    public String showLoginForm() {
        return "login"; // Vista de inicio de sesión
    }

    @PostMapping("/login")
    public String login(String nomina, String password, Model model) {
        User usuario = usuarioService.findByNomina(nomina);
        if (usuario != null && usuario.getPassword().equals(password)) {
            // Iniciar sesión
            return "redirect:/usuarios"; // Redirigir a la lista de usuarios
        } else {
            model.addAttribute("error", "Credenciales incorrectas");
            return "login"; // Volver a la vista de inicio de sesión
        }
    }
}
