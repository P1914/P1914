import pygame
import sys

# Initialize Pygame
pygame.init()

# Screen Dimensions
WIDTH, HEIGHT = 800, 600
screen = pygame.display.set_mode((WIDTH, HEIGHT))
pygame.display.set_caption("My First Game")

# Colors
WHITE = (255, 255, 255)
BLACK = (0, 0, 0)
BLUE = (0, 0, 255)

# Clock for FPS
clock = pygame.time.Clock()

# Player Setup
player_size = 50
player_x, player_y = WIDTH // 2, HEIGHT - 100
player_speed = 5

# Game Loop
running = True
while running:
    screen.fill(WHITE)  # Clear screen

    # Handle Events
    for event in pygame.event.get():
        if event.type == pygame.QUIT:
            running = False

    # Movement
    keys = pygame.key.get_pressed()
    if keys[pygame.K_LEFT] and player_x > 0:
        player_x -= player_speed
    if keys[pygame.K_RIGHT] and player_x < WIDTH - player_size:
        player_x += player_speed

    # Draw Player
    pygame.draw.rect(screen, BLUE, (player_x, player_y, player_size, player_size))

    # Refresh Screen
    pygame.display.flip()
    clock.tick(60)

pygame.quit()
sys.exit()
