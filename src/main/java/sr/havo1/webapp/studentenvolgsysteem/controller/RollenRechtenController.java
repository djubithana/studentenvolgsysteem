package sr.havo1.webapp.studentenvolgsysteem.controller;

import sr.havo1.webapp.studentenvolgsysteem.dao.RollenRechtenDAO;
import sr.havo1.webapp.studentenvolgsysteem.entity.RollenRechten;

import javax.ws.rs.*;
import javax.ws.rs.core.MediaType;

/**
 * Created by DENCIO on 6/26/2018.
 */

@Path("/rollenRechten")
public class RollenRechtenController {

    private RollenRechtenDAO rollenRechtenDAO = new RollenRechtenDAO();

    @Path("/addRolRecht")
    @POST
    @Consumes(MediaType.APPLICATION_JSON)
    @Produces(MediaType.APPLICATION_JSON)
    public RollenRechten add(RollenRechten rolRecht) {
        return rollenRechtenDAO.addRolRecht(rolRecht);
    }

    @Path("/getRolRecht")
    @POST
    @Consumes(MediaType.APPLICATION_JSON)
    @Produces(MediaType.APPLICATION_JSON)
    public RollenRechten getRolRecht(RollenRechten rolRecht) {
        return rollenRechtenDAO.getRolRecht(rolRecht.getRol_recht_id());
    }

    @Path("/removeRol")
    @POST
    @Consumes(MediaType.APPLICATION_JSON)
    @Produces(MediaType.APPLICATION_JSON)
    public RollenRechten remove(RollenRechten rolRecht) {
        rollenRechtenDAO.deleteRolRecht(rolRecht);
        return rolRecht;
    }
}
