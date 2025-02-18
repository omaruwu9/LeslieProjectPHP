package com.example.demo.service;

import com.example.demo.model.User;
import com.example.demo.repository.UserRepository;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import java.util.List;

@Service
public class UserService {

    @Autowired
    private UserRepository UserRepository;

    public List<User> findAll() {
        return UserRepository.findAll();
    }

    public User findByNomina(String nomina) {
        return UserRepository.findByNomina(nomina);
    }

    public void save(User usuario) {
        UserRepository.save(usuario);
    }

    public void deleteById(Long id) {
        UserRepository.deleteById(id);
    }
}
