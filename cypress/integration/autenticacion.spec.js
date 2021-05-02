/// <reference types="cypress" />

describe('Probar la autenticacion', () => {
    it('Prueba la autenticación en /login', () => {
        cy.visit('/login');

        cy.get('[data-cy="heading-login"]').should('exist');
        cy.get('[data-cy="heading-login"]').should('have.text', 'Iniciar Sesión');

        cy.get('[data-cy="formulario-login"]').should('exist');

        cy.get('[data-cy="formulario-login"]').submit();
        cy.get('[data-cy="alerta-login"]').should('exist');
        cy.get('[data-cy="alerta-login"]').first().should('have.class', 'error');
        cy.get('[data-cy="alerta-login"]').eq(0).should('have.text', 'El Email Es Obligatorio');
        cy.get('[data-cy="alerta-login"]').eq(1).should('have.text', 'El Password Es Obligatorio');
    });
});