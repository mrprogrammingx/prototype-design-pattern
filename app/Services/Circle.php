<?php

namespace App\Services;

class Circle extends Shape
{
    public function __construct(public int $radius)
    {
    }

    public function clone(): self
    {
        return new Circle($this->radius);
    }

    public function getRadius(): int
    {
        return $this->radius;
    }

    public function setRadius(int $radius): void
    {
        $this->radius = $radius;
    }

    public function getArea(): float
    {
        return pi() * ($this->radius ** 2);
    }

    public function getPerimeter(): float
    {
        return 2 * pi() * $this->radius;
    }
    
    public function getType(): string
    {
        return 'Circle';
    }

    public function __toString(): string
    {
        return sprintf(
            "Circle: radius=%d, x=%d, y=%d",
            $this->radius,
            $this->x,
            $this->y
        );
    }

    public function __debugInfo(): array
    {
        return [
            'type' => $this->getType(),
            'radius' => $this->radius,
            'x' => $this->x,
            'y' => $this->y,
            'area' => $this->getArea(),
            'perimeter' => $this->getPerimeter(),
        ];
    }

    public function getColor(): string
    {
        return $this->color;
    }

    public function setColor(string $color): void
    {
        $this->color = $color;
    }

    public function getX(): int
    {
        return $this->x;
    }

    public function getY(): int
    {
        return $this->y;
    }

    public function setPosition(int $x, int $y): void
    {
        $this->x = $x;
        $this->y = $y;
    }

    public function getPosition(): array
    {
        return ['x' => $this->x, 'y' => $this->y];
    }
    
    public function getBoundingBox(): array
    {
        return [
            'x1' => $this->x - $this->radius,
            'y1' => $this->y - $this->radius,
            'x2' => $this->x + $this->radius,
            'y2' => $this->y + $this->radius,
        ];
    }

    public function isPointInside(int $x, int $y): bool
    {
        $dx = $x - $this->x;
        $dy = $y - $this->y;
        return ($dx * $dx + $dy * $dy) <= ($this->radius * $this->radius);
    }

    public function getDistanceTo(int $x, int $y): float
    {
        $dx = $x - $this->x;
        $dy = $y - $this->y;
        return sqrt($dx * $dx + $dy * $dy);
    }

    public function getIntersectionWith(Circle $other): ?array
    {
        $d = $this->getDistanceTo($other->getX(), $other->getY());
        if ($d > ($this->radius + $other->getRadius()) || $d < abs($this->radius - $other->getRadius())) {
            return null; // No intersection
        }

        // Calculate intersection points
        $a = ($this->radius ** 2 - $other->getRadius() ** 2 + $d ** 2) / (2 * $d);
        $h = sqrt($this->radius ** 2 - $a ** 2);
        $x0 = $this->x + ($a * ($other->getX() - $this->x)) / $d;
        $y0 = $this->y + ($a * ($other->getY() - $this->y)) / $d;

        if ($h == 0) {
            return [[$x0, $y0]]; // One intersection point
        }

        return [
            [$x0 + ($h * ($other->getY() - $this->y)) / $d, $y0 - ($h * ($other->getX() - $this->x)) / $d],
            [$x0 - ($h * ($other->getY() - $this->y)) / $d, $y0 + ($h * ($other->getX() - $this->x)) / $d],
        ]; // Two intersection points
    }
    
    public function getScaleFactor(): float
    {
        return $this->radius / 100.0; // Example scale factor based on radius
    }

    public function setScaleFactor(float $scaleFactor): void
    {
        $this->radius = (int)($scaleFactor * 100); // Example scaling logic
    }

    public function getScale(): float
    {
        return $this->getScaleFactor();
    }

    public function setScale(float $scale): void
    {
        $this->setScaleFactor($scale);
    }

    public function getRotation(): float
    {
        return 0.0; // Circles do not have a rotation
    }

    public function getTransformations(): array
    {
        return [
            'scale' => $this->getScale(),
            'rotation' => $this->getRotation(),
            'position' => $this->getPosition(),
        ];
    }

    public function applyTransformation(array $transformation): void
    {
        if (isset($transformation['scale'])) {
            $this->setScale($transformation['scale']);
        }
        if (isset($transformation['rotation'])) {
            // Rotation is not applicable for circles
        }
        if (isset($transformation['position'])) {
            $this->setPosition($transformation['position']['x'], $transformation['position']['y']);
        }
    }
    
    public function getTransformationMatrix(): array
    {
        return [
            'scale' => $this->getScale(),
            'rotation' => $this->getRotation(),
            'position' => $this->getPosition(),
        ];
    }

    public function applyTransformationMatrix(array $matrix): void
    {
        if (isset($matrix['scale'])) {
            $this->setScale($matrix['scale']);
        }
        if (isset($matrix['rotation'])) {
            // Rotation is not applicable for circles
        }
        if (isset($matrix['position'])) {
            $this->setPosition($matrix['position']['x'], $matrix['position']['y']);
        }
    }

    public function getTransformationType(): string
    {
        return 'CircleTransformation';
    }

    public function getTransformationData(): array
    {
        return [
            'scale' => $this->getScale(),
            'rotation' => $this->getRotation(),
            'position' => $this->getPosition(),
        ];
    }
    public function applyTransformationToShape(Shape $shape): void
    {
        if ($shape instanceof Circle) {
            $shape->applyTransformation($this->getTransformationData());
        }
    }

    public function getTransformationForShape(Shape $shape): array
    {
        if ($shape instanceof Circle) {
            return $this->getTransformationData();
        }
        return [];
    }

    public function getTransformationForType(string $type): array
    {
        if ($type === 'Circle') {
            return $this->getTransformationData();
        }
        return [];
    }

    public function getTransformationMatrixForShape(Shape $shape): array
    {
        if ($shape instanceof Circle) {
            return $this->getTransformationMatrix();
        }
        return [];
    }
    
    public function getTransformationMatrixForType(string $type): array
    {
        if ($type === 'Circle') {
            return $this->getTransformationMatrix();
        }
        return [];
    }
    
    public function getTransformationForCircle(Circle $circle): array
    {
        return $this->getTransformationData();
    }
    
}
