package ec.edu.jairo.app.Repository;

import ec.edu.jairo.app.Models.Estudiante;
import org.springframework.data.jpa.repository.JpaRepository;
import org.springframework.stereotype.Repository;



@Repository
public interface EstudianteRepository extends JpaRepository<Estudiante,String> {
}
