package sr.havo1.webapp.studentenvolgsysteem.controller;

import sr.havo1.webapp.studentenvolgsysteem.dao.RollenDAO;
import sr.havo1.webapp.studentenvolgsysteem.entity.Rollen;

import javax.ws.rs.*;
import javax.ws.rs.core.MediaType;
import java.util.List;

/**
 * Created by DENCIO on 6/20/2018.
 */

@Path("/rollen")
public class RollenController {

    private RollenDAO rollenDAO = new RollenDAO();

    @Path("/list")
    @GET
    @Produces(MediaType.APPLICATION_JSON)
    public List<Rollen> findAll() {
        return rollenDAO.loadAllRollen();
    }

    @Path("/addRol")
    @POST
    @Consumes(MediaType.APPLICATION_JSON)
    @Produces(MediaType.APPLICATION_JSON)
    public Rollen add(Rollen rol) {
        return rollenDAO.addRol(rol);
    }

    @Path("/updateRol")
    @POST
    @Consumes(MediaType.APPLICATION_JSON)
    @Produces(MediaType.APPLICATION_JSON)
    public Rollen update(Rollen rol) {
        rollenDAO.updateRol(rol);
        return rol;
    }

    @Path("/removeRol")
    @POST
    @Consumes(MediaType.APPLICATION_JSON)
    @Produces(MediaType.APPLICATION_JSON)
    public Rollen remove(Rollen rol) {
        rollenDAO.deleteRol(rol);
        return rol;
    }

    @Path("/getRol")
    @POST
    @Consumes(MediaType.APPLICATION_JSON)
    @Produces(MediaType.APPLICATION_JSON)
    public Rollen getRol(Rollen rol) {
        return rollenDAO.getRol(rol.getRol_id());
    }
}
