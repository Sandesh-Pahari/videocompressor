<?php

namespace App\Livewire;

use Livewire\Component;


class MeetingRoom extends Component
{
    public string $roomName;
    public string $userName;
    public string $jwtToken;

    public function mount()
    {
        $this->roomName = 'test-room';
        $this->userName = auth()->name ?? 'Guest';
        $this->jwtToken = 'eyJraWQiOiJ2cGFhcy1tYWdpYy1jb29raWUtZThjMjM2MWY5YWY5NDUwYThmOTc5ZjNlZTg4NjA2MTEvYzczZjFmLVNBTVBMRV9BUFAiLCJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiJqaXRzaSIsImlzcyI6ImNoYXQiLCJpYXQiOjE3NDgwODAzNTYsImV4cCI6MTc0ODA4NzU1NiwibmJmIjoxNzQ4MDgwMzUxLCJzdWIiOiJ2cGFhcy1tYWdpYy1jb29raWUtZThjMjM2MWY5YWY5NDUwYThmOTc5ZjNlZTg4NjA2MTEiLCJjb250ZXh0Ijp7ImZlYXR1cmVzIjp7ImxpdmVzdHJlYW1pbmciOnRydWUsIm91dGJvdW5kLWNhbGwiOnRydWUsInNpcC1vdXRib3VuZC1jYWxsIjpmYWxzZSwidHJhbnNjcmlwdGlvbiI6dHJ1ZSwicmVjb3JkaW5nIjp0cnVlfSwidXNlciI6eyJoaWRkZW4tZnJvbS1yZWNvcmRlciI6ZmFsc2UsIm1vZGVyYXRvciI6dHJ1ZSwibmFtZSI6ImJsb29kazM5NSIsImlkIjoiZ29vZ2xlLW9hdXRoMnwxMTA0MjcwMDg1NzY2NjgwODYyODkiLCJhdmF0YXIiOiIiLCJlbWFpbCI6ImJsb29kazM5NUBnbWFpbC5jb20ifX0sInJvb20iOiIqIn0.e3L_SMqHsCyOyylInY3mL_xk_6FsKkiuGFq7UXBz3wXuREvuMz71RSQDS6HiDEJLnflJiXYYMpojDLs_6SwzItx3o68WkitvYOpmeYriG8zMFpWNN8kofJJ_-4EehfjJ6BX7yJu2p-VO9DNmQszLkvaYF9ziC5d4fjKyI5TqbK0Yo3De3iLoJUNInbBVUMcitZJ5zlNkWOMqYKRzyw7nuOqadm8O_ShMBEKInlKKwt2Y7ORzh63vFbIBAEuUKMA5CCgEc94zXFASeErJQsYXXxxznX6N7XIve9QWVoCEPOiDls14-bM58qbm3evhJSpNM5JIxwV4gdovrHkRU3ktNQ';
    }

    public function render()
    {
        return view('livewire.meeting-room');
    }
}
