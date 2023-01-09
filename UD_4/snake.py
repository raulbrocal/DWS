import pygame
from pygame.locals import *

if __name__ == "__main__":
    pygame.init()
    surface = pygame.display.set_mode((1000,500))
    surface.fill((255,255,255))
    pygame.display.flip() 

    location_x = 50
    location_y = 50
    color = (255,0,0)
    exit = False
    while not exit:
        
        for event in pygame.event.get():
            if event.type == pygame.QUIT:
                pygame.quit()
            
        #¿Se ha pulsado una tecla?
        if event.type == pygame.KEYDOWN:
                
            if event.key == pygame.K_RIGHT:
                location_x+=1
            if event.key == pygame.K_LEFT:
                location_x-=1
            if event.key == pygame.K_UP:
                location_y-=1
            if event.key == pygame.K_DOWN:
                location_y+=1

        #Pintar
        surface.fill((255,255,255))
        pygame.draw.rect(surface, color, pygame.Rect(location_x, location_y, 60, 60))
        pygame.display.flip()